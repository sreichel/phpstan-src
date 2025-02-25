<?php declare(strict_types = 1);

namespace PHPStan\Rules\Classes;

use PhpParser\Node;
use PHPStan\Analyser\Scope;
use PHPStan\Node\InClassNode;
use PHPStan\Reflection\ReflectionProvider;
use PHPStan\Rules\ClassNameCheck;
use PHPStan\Rules\ClassNameNodePair;
use PHPStan\Rules\Generics\GenericObjectTypeCheck;
use PHPStan\Rules\MissingTypehintCheck;
use PHPStan\Rules\PhpDoc\UnresolvableTypeHelper;
use PHPStan\Rules\Rule;
use PHPStan\Rules\RuleErrorBuilder;
use PHPStan\Type\VerbosityLevel;
use function array_merge;
use function implode;
use function sprintf;

/**
 * @implements Rule<InClassNode>
 */
final class MixinRule implements Rule
{

	public function __construct(
		private ReflectionProvider $reflectionProvider,
		private ClassNameCheck $classCheck,
		private GenericObjectTypeCheck $genericObjectTypeCheck,
		private MissingTypehintCheck $missingTypehintCheck,
		private UnresolvableTypeHelper $unresolvableTypeHelper,
		private bool $checkClassCaseSensitivity,
		private bool $absentTypeChecks,
	)
	{
	}

	public function getNodeType(): string
	{
		return InClassNode::class;
	}

	public function processNode(Node $node, Scope $scope): array
	{
		$classReflection = $node->getClassReflection();
		$mixinTags = $classReflection->getMixinTags();
		$errors = [];
		foreach ($mixinTags as $mixinTag) {
			$type = $mixinTag->getType();
			if (!$type->canCallMethods()->yes() || !$type->canAccessProperties()->yes()) {
				$errors[] = RuleErrorBuilder::message(sprintf('PHPDoc tag @mixin contains non-object type %s.', $type->describe(VerbosityLevel::typeOnly())))
					->identifier('mixin.nonObject')
					->build();
				continue;
			}

			if (
				$this->unresolvableTypeHelper->containsUnresolvableType($type)
			) {
				$errors[] = RuleErrorBuilder::message('PHPDoc tag @mixin contains unresolvable type.')
					->identifier('mixin.unresolvableType')
					->build();
				continue;
			}

			$errors = array_merge($errors, $this->genericObjectTypeCheck->check(
				$type,
				'PHPDoc tag @mixin contains generic type %s but %s %s is not generic.',
				'Generic type %s in PHPDoc tag @mixin does not specify all template types of %s %s: %s',
				'Generic type %s in PHPDoc tag @mixin specifies %d template types, but %s %s supports only %d: %s',
				'Type %s in generic type %s in PHPDoc tag @mixin is not subtype of template type %s of %s %s.',
				'Call-site variance of %s in generic type %s in PHPDoc tag @mixin is in conflict with %s template type %s of %s %s.',
				'Call-site variance of %s in generic type %s in PHPDoc tag @mixin is redundant, template type %s of %s %s has the same variance.',
			));

			foreach ($this->missingTypehintCheck->getNonGenericObjectTypesWithGenericClass($type) as [$innerName, $genericTypeNames]) {
				$errors[] = RuleErrorBuilder::message(sprintf(
					'PHPDoc tag @mixin contains generic %s but does not specify its types: %s',
					$innerName,
					implode(', ', $genericTypeNames),
				))
					->identifier('missingType.generics')
					->build();
			}

			if ($this->absentTypeChecks) {
				foreach ($this->missingTypehintCheck->getIterableTypesWithMissingValueTypehint($type) as $iterableType) {
					$iterableTypeDescription = $iterableType->describe(VerbosityLevel::typeOnly());
					$errors[] = RuleErrorBuilder::message(sprintf(
						'%s %s has PHPDoc tag @mixin with no value type specified in iterable type %s.',
						$classReflection->getClassTypeDescription(),
						$classReflection->getDisplayName(),
						$iterableTypeDescription,
					))
						->tip(MissingTypehintCheck::MISSING_ITERABLE_VALUE_TYPE_TIP)
						->identifier('missingType.iterableValue')
						->build();
				}

				foreach ($this->missingTypehintCheck->getCallablesWithMissingSignature($type) as $callableType) {
					$errors[] = RuleErrorBuilder::message(sprintf(
						'%s %s has PHPDoc tag @mixin with no signature specified for %s.',
						$classReflection->getClassTypeDescription(),
						$classReflection->getDisplayName(),
						$callableType->describe(VerbosityLevel::typeOnly()),
					))->identifier('missingType.callable')->build();
				}
			}

			foreach ($type->getReferencedClasses() as $class) {
				if (!$this->reflectionProvider->hasClass($class)) {
					$errors[] = RuleErrorBuilder::message(sprintf('PHPDoc tag @mixin contains unknown class %s.', $class))
						->identifier('class.notFound')
						->discoveringSymbolsTip()
						->build();
				} elseif ($this->reflectionProvider->getClass($class)->isTrait()) {
					$errors[] = RuleErrorBuilder::message(sprintf('PHPDoc tag @mixin contains invalid type %s.', $class))
						->identifier('mixin.trait')
						->build();
				} else {
					$errors = array_merge(
						$errors,
						$this->classCheck->checkClassNames([
							new ClassNameNodePair($class, $node),
						], $this->checkClassCaseSensitivity),
					);
				}
			}
		}

		return $errors;
	}

}
