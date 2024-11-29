<?php // phpcs:ignoreFile

/**
 * Copied over from https://github.com/phan/phan/blob/8866d6b98be94b37996390da226e8c4befea29aa/src/Phan/Language/Internal/FunctionSignatureMap_php80_delta.php
 * Copyright (c) 2015 Rasmus Lerdorf
 * Copyright (c) 2015 Andrew Morrison
 */

/**
 * This contains the information needed to convert the function signatures for php 8.0 to php 7.4 (and vice versa)
 *
 * This has two sections.
 * The 'new' section contains function/method names from FunctionSignatureMap (And alternates, if applicable) that do not exist in php7.4 or have different signatures in php 8.0.
 *   If they were just updated, the function/method will be present in the 'added' signatures.
 * The 'old' signatures contains the signatures that are different in php 7.4.
 *   Functions are expected to be removed only in major releases of php.
 *
 * @see FunctionSignatureMap.php
 *
 * @phan-file-suppress PhanPluginMixedKeyNoKey (read by Phan when analyzing this file)
 */
return [
	'new' => [
		'array_combine' => ['associative-array', 'keys'=>'string[]|int[]', 'values'=>'array'],
		'base64_decode' => ['string', 'string'=>'string', 'strict='=>'false'],
		'base64_decode\'1' => ['string|false', 'string'=>'string', 'strict='=>'true'],
		'bcdiv' => ['string', 'dividend'=>'string', 'divisor'=>'string', 'scale='=>'int'],
		'bcmod' => ['string', 'dividend'=>'string', 'divisor'=>'string', 'scale='=>'int'],
		'bcpowmod' => ['string', 'base'=>'string', 'exponent'=>'string', 'modulus'=>'string', 'scale='=>'int'],
		'call_user_func_array' => ['mixed', 'function'=>'callable', 'parameters'=>'array<int|string,mixed>'],
		'ceil' => ['float', 'number'=>'float'],
		'com_load_typelib' => ['bool', 'typelib_name'=>'string', 'case_insensitive='=>'true'],
		'count_chars' => ['array<int,int>|string', 'input'=>'string', 'mode='=>'int'],
		'curl_init' => ['__benevolent<CurlHandle|false>', 'url='=>'string'],
		'date_add' => ['DateTime', 'object'=>'DateTime', 'interval'=>'DateInterval'],
		'date_date_set' => ['DateTime', 'object'=>'DateTime', 'year'=>'int', 'month'=>'int', 'day'=>'int'],
		'date_diff' => ['DateInterval', 'obj1'=>'DateTimeInterface', 'obj2'=>'DateTimeInterface', 'absolute='=>'bool'],
		'date_format' => ['string', 'object'=>'DateTimeInterface', 'format'=>'string'],
		'date_isodate_set' => ['DateTime', 'object'=>'DateTime', 'year'=>'int', 'week'=>'int', 'day='=>'int|mixed'],
		'date_parse' => ['array<string,mixed>', 'date'=>'string'],
		'date_sub' => ['DateTime', 'object'=>'DateTime', 'interval'=>'DateInterval'],
		'date_sun_info' => ['array{sunrise: int|bool,sunset: int|bool,transit: int|bool,civil_twilight_begin: int|bool,civil_twilight_end: int|bool,nautical_twilight_begin: int|bool,nautical_twilight_end: int|bool,astronomical_twilight_begin: int|bool,astronomical_twilight_end: int|bool}', 'time'=>'int', 'latitude'=>'float', 'longitude'=>'float'],
		'date_time_set' => ['DateTime', 'object'=>'DateTime', 'hour'=>'int', 'minute'=>'int', 'second='=>'int', 'microseconds='=>'int'],
		'date_timestamp_set' => ['DateTime', 'object'=>'DateTime', 'unixtimestamp'=>'int'],
		'date_timezone_set' => ['DateTime', 'object'=>'DateTime', 'timezone'=>'DateTimeZone'],
		'error_log' => ['bool', 'message'=>'string', 'message_type='=>'0|1|3|4', 'destination='=>'string', 'extra_headers='=>'string'],
		'explode' => ['list<string>', 'separator'=>'non-empty-string', 'str'=>'string', 'limit='=>'int'],
		'fdiv' => ['float', 'dividend'=>'float', 'divisor'=>'float'],
		'filter_input' => ['mixed', 'type'=>'INPUT_GET|INPUT_POST|INPUT_COOKIE|INPUT_SERVER|INPUT_ENV', 'variable_name'=>'string', 'filter='=>'int', 'options='=>'array|int'],
		'filter_input_array' => ['array|false|null', 'type'=>'INPUT_GET|INPUT_POST|INPUT_COOKIE|INPUT_SERVER|INPUT_ENV', 'definition='=>'int|array', 'add_empty='=>'bool'],
		'floor' => ['float', 'number'=>'float'],
		'forward_static_call_array' => ['mixed', 'function'=>'callable', 'parameters'=>'array<int|string,mixed>'],
		'get_debug_type' => ['string', 'var'=>'mixed'],
		'get_resource_id' => ['int', 'res'=>'resource'],
		'gmdate' => ['string', 'format'=>'string', 'timestamp='=>'int'],
		'gmmktime' => ['int|false', 'hour'=>'int', 'minute='=>'int', 'second='=>'int', 'month='=>'int', 'day='=>'int', 'year='=>'int'],
		'hash' => ['non-falsy-string', 'algo'=>'string', 'data'=>'string', 'raw_output='=>'bool'],
		'hash_hkdf' => ['non-falsy-string', 'algo'=>'non-falsy-string', 'key'=>'string', 'length='=>'0|positive-int', 'info='=>'string', 'salt='=>'string'],
		'hash_hmac' => ['non-empty-string', 'algo'=>'string', 'data'=>'string', 'key'=>'string', 'raw_output='=>'bool'],
		'hash_pbkdf2' => ['non-empty-string', 'algo'=>'non-falsy-string', 'password'=>'string', 'salt'=>'string', 'iterations'=>'positive-int', 'length='=>'0|positive-int', 'raw_output='=>'bool'],
		'imageaffine' => ['false|object', 'src'=>'resource', 'affine'=>'array', 'clip='=>'array'],
		'imagecreate' => ['__benevolent<GdImage|false>', 'width'=>'int<1, max>', 'height'=>'int<1, max>'],
		'imagecreatefrombmp' => ['false|object', 'filename'=>'string'],
		'imagecreatefromgd' => ['false|object', 'filename'=>'string'],
		'imagecreatefromgd2' => ['false|object', 'filename'=>'string'],
		'imagecreatefromgd2part' => ['false|object', 'filename'=>'string', 'srcx'=>'int', 'srcy'=>'int', 'width'=>'int', 'height'=>'int'],
		'imagecreatefromgif' => ['false|object', 'filename'=>'string'],
		'imagecreatefromjpeg' => ['false|object', 'filename'=>'string'],
		'imagecreatefrompng' => ['false|object', 'filename'=>'string'],
		'imagecreatefromstring' => ['false|object', 'image'=>'string'],
		'imagecreatefromwbmp' => ['false|object', 'filename'=>'string'],
		'imagecreatefromwebp' => ['false|object', 'filename'=>'string'],
		'imagecreatefromxbm' => ['false|object', 'filename'=>'string'],
		'imagecreatefromxpm' => ['false|object', 'filename'=>'string'],
		'imagecreatetruecolor' => ['__benevolent<GdImage|false>', 'width'=>'int<1, max>', 'height'=>'int<1, max>'],
		'imagecrop' => ['false|object', 'im'=>'resource', 'rect'=>'array'],
		'imagecropauto' => ['false|object', 'im'=>'resource', 'mode'=>'int', 'threshold'=>'float', 'color'=>'int'],
		'imagegetclip' => ['array<int,int>', 'im'=>'resource'],
		'imagegrabscreen' => ['false|object'],
		'imagegrabwindow' => ['false|object', 'window_handle'=>'int', 'client_area='=>'int'],
		'imagejpeg' => ['bool', 'im'=>'GdImage', 'filename='=>'string|resource|null', 'quality='=>'int'],
		'imagerotate' => ['false|object', 'src_im'=>'resource', 'angle'=>'float', 'bgdcolor'=>'int', 'ignoretransparent='=>'int'],
		'imagescale' => ['false|object', 'im'=>'resource', 'new_width'=>'int', 'new_height='=>'int', 'method='=>'int'],
		'ldap_set_rebind_proc' => ['bool', 'ldap'=>'resource', 'callback'=>'?callable'],
		'mb_decode_numericentity' => ['string|false', 'string'=>'string', 'convmap'=>'array', 'encoding='=>'string'],
		'mb_detect_order' => ['bool|list<non-falsy-string>', 'encoding_list='=>'non-empty-list<non-falsy-string>|non-falsy-string|null'],
		'mb_encoding_aliases' => ['list<non-falsy-string>', 'encoding'=>'string'],
		'mb_str_split' => ['list<string>', 'str'=>'string', 'split_length='=>'positive-int', 'encoding='=>'string'],
		'mb_strlen' => ['0|positive-int', 'str'=>'string', 'encoding='=>'string'],
		'mktime' => ['int|false', 'hour'=>'int', 'minute='=>'int', 'second='=>'int', 'month='=>'int', 'day='=>'int', 'year='=>'int'],
		'odbc_exec' => ['resource|false', 'connection_id'=>'resource', 'query'=>'string'],
		'parse_str' => ['void', 'encoded_string'=>'string', '&w_result'=>'array'],
		'password_hash' => ['non-empty-string', 'password'=>'string', 'algo'=>'string|int|null', 'options='=>'array'],
		'PDOStatement::fetchAll' => ['array', 'how='=>'int', 'fetch_argument='=>'int|string|callable', 'ctor_args='=>'?array'],
		'PhpToken::tokenize' => ['list<PhpToken>', 'code'=>'string', 'flags='=>'int'],
		'PhpToken::is' => ['bool', 'kind'=>'string|int|string[]|int[]'],
		'PhpToken::isIgnorable' => ['bool'],
		'PhpToken::getTokenName' => ['non-falsy-string'],
		'preg_match_all' => ['0|positive-int|false', 'pattern'=>'string', 'subject'=>'string', '&w_subpatterns='=>'array', 'flags='=>'int', 'offset='=>'int'],
		'proc_get_status' => ['array{command: string, pid: int, running: bool, signaled: bool, stopped: bool, exitcode: int, termsig: int, stopsig: int}', 'process'=>'resource'],
		'set_error_handler' => ['?callable', 'callback'=>'null|callable(int,string,string,int):bool', 'error_types='=>'int'],
		'socket_addrinfo_lookup' => ['AddressInfo[]', 'node'=>'string', 'service='=>'mixed', 'hints='=>'array'],
		'socket_select' => ['int|false', '&w_read'=>'Socket[]|null', '&w_write'=>'Socket[]|null', '&w_except'=>'Socket[]|null', 'seconds'=>'int|null', 'microseconds='=>'int'],
		'sodium_crypto_aead_chacha20poly1305_ietf_decrypt' => ['string|false', 'confidential_message'=>'string', 'public_message'=>'string', 'nonce'=>'string', 'key'=>'string'],
		'spl_autoload_functions' => ['list<callable(string):void>'],
		'str_contains' => ['bool', 'haystack'=>'string', 'needle'=>'string'],
		'str_split' => ['non-empty-list<string>', 'str'=>'string', 'split_length='=>'positive-int'],
		'str_ends_with' => ['bool', 'haystack'=>'string', 'needle'=>'string'],
		'str_starts_with' => ['bool', 'haystack'=>'string', 'needle'=>'string'],
		'strchr' => ['string|false', 'haystack'=>'string', 'needle'=>'string', 'before_needle='=>'bool'],
		'stripos' => ['0|positive-int|false', 'haystack'=>'string', 'needle'=>'string', 'offset='=>'int'],
		'stristr' => ['string|false', 'haystack'=>'string', 'needle'=>'string', 'before_needle='=>'bool'],
		'strpos' => ['positive-int|0|false', 'haystack'=>'string', 'needle'=>'string', 'offset='=>'int'],
		'strrchr' => ['string|false', 'haystack'=>'string', 'needle'=>'string'],
		'strripos' => ['int|false', 'haystack'=>'string', 'needle'=>'string', 'offset='=>'int'],
		'strrpos' => ['int|false', 'haystack'=>'string', 'needle'=>'string', 'offset='=>'int'],
		'strstr' => ['string|false', 'haystack'=>'string', 'needle'=>'string', 'before_needle='=>'bool'],
		'substr' => ['string', 'string'=>'string', 'start'=>'int', 'length='=>'int'],
		'round' => ['float', 'number'=>'float', 'precision='=>'int', 'mode='=>'1|2|3|4'],
		'version_compare' => ['int|bool', 'version1'=>'string', 'version2'=>'string', 'operator='=>'string|null'],
		'xml_get_current_column_number' => ['int', 'parser'=>'XMLParser'],
		'xml_get_current_line_number' => ['int', 'parser'=>'XMLParser'],
		'xml_get_error_code' => ['int', 'parser'=>'XMLParser'],
		'xml_parse' => ['int', 'parser'=>'XMLParser', 'data'=>'string', 'isfinal='=>'bool'],
		'xml_parse_into_struct' => ['int', 'parser'=>'XMLParser', 'data'=>'string', '&w_values'=>'array', '&w_index='=>'array'],
		'xml_parser_create' => ['XMLParser', 'encoding='=>'string|null'],
		'xml_parser_create_ns' => ['XMLParser|false', 'encoding='=>'string|null', 'sep='=>'string'],
		'xml_parser_free' => ['bool', 'parser'=>'XMLParser'],
		'xml_parser_get_option' => ['string|int', 'parser'=>'XMLParser', 'option'=>'int'],
		'xml_parser_set_option' => ['bool', 'parser'=>'XMLParser', 'option'=>'int', 'value'=>'string|int'],
		'xml_set_character_data_handler' => ['true', 'parser'=>'XMLParser', 'hdl'=>'callable|string'],
		'xml_set_default_handler' => ['true', 'parser'=>'XMLParser', 'hdl'=>'callable|string'],
		'xml_set_element_handler' => ['true', 'parser'=>'XMLParser', 'shdl'=>'callable|string', 'ehdl'=>'callable|string'],
		'xml_set_end_namespace_decl_handler' => ['true', 'parser'=>'XMLParser', 'hdl'=>'callable|string'],
		'xml_set_external_entity_ref_handler' => ['true', 'parser'=>'XMLParser', 'hdl'=>'callable|string'],
		'xml_set_notation_decl_handler' => ['true', 'parser'=>'XMLParser', 'hdl'=>'callable|string'],
		'xml_set_object' => ['true', 'parser'=>'XMLParser', 'obj'=>'object'],
		'xml_set_processing_instruction_handler' => ['true', 'parser'=>'XMLParser', 'hdl'=>'callable|string'],
		'xml_set_start_namespace_decl_handler' => ['true', 'parser'=>'XMLParser', 'hdl'=>'callable|string'],
		'xml_set_unparsed_entity_decl_handler' => ['true', 'parser'=>'XMLParser', 'hdl'=>'callable|string'],
		'xmlwriter_end_attribute' => ['bool', 'xmlwriter'=>'XMLWriter'],
		'xmlwriter_end_cdata' => ['bool', 'xmlwriter'=>'XMLWriter'],
		'xmlwriter_end_comment' => ['bool', 'xmlwriter'=>'XMLWriter'],
		'xmlwriter_end_document' => ['bool', 'xmlwriter'=>'XMLWriter'],
		'xmlwriter_end_dtd' => ['bool', 'xmlwriter'=>'XMLWriter'],
		'xmlwriter_end_dtd_attlist' => ['bool', 'xmlwriter'=>'XMLWriter'],
		'xmlwriter_end_dtd_element' => ['bool', 'xmlwriter'=>'XMLWriter'],
		'xmlwriter_end_dtd_entity' => ['bool', 'xmlwriter'=>'XMLWriter'],
		'xmlwriter_end_element' => ['bool', 'xmlwriter'=>'XMLWriter'],
		'xmlwriter_end_pi' => ['bool', 'xmlwriter'=>'XMLWriter'],
		'xmlwriter_flush' => ['mixed', 'xmlwriter'=>'XMLWriter', 'empty='=>'bool'],
		'xmlwriter_full_end_element' => ['bool', 'xmlwriter'=>'XMLWriter'],
		'xmlwriter_open_memory' => ['XMLWriter'],
		'xmlwriter_open_uri' => ['XMLWriter', 'source'=>'string'],
		'xmlwriter_output_memory' => ['string', 'xmlwriter'=>'XMLWriter', 'flush='=>'bool'],
		'xmlwriter_set_indent' => ['bool', 'xmlwriter'=>'XMLWriter', 'indent'=>'bool'],
		'xmlwriter_set_indent_string' => ['bool', 'xmlwriter'=>'XMLWriter', 'indentstring'=>'string'],
		'xmlwriter_start_attribute' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string'],
		'xmlwriter_start_attribute_ns' => ['bool', 'xmlwriter'=>'XMLWriter', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string'],
		'xmlwriter_start_cdata' => ['bool', 'xmlwriter'=>'XMLWriter'],
		'xmlwriter_start_comment' => ['bool', 'xmlwriter'=>'XMLWriter'],
		'xmlwriter_start_document' => ['bool', 'xmlwriter'=>'XMLWriter', 'version='=>'string', 'encoding='=>'string', 'standalone='=>'string'],
		'xmlwriter_start_dtd' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'publicid='=>'string', 'sysid='=>'string'],
		'xmlwriter_start_dtd_attlist' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string'],
		'xmlwriter_start_dtd_element' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string'],
		'xmlwriter_start_dtd_entity' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'isparam'=>'bool'],
		'xmlwriter_start_element' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string'],
		'xmlwriter_start_element_ns' => ['bool', 'xmlwriter'=>'XMLWriter', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string|null'],
		'xmlwriter_start_pi' => ['bool', 'xmlwriter'=>'XMLWriter', 'target'=>'string'],
		'xmlwriter_text' => ['bool', 'xmlwriter'=>'XMLWriter', 'content'=>'string'],
		'xmlwriter_write_attribute' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'content'=>'string'],
		'xmlwriter_write_attribute_ns' => ['bool', 'xmlwriter'=>'XMLWriter', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string', 'content'=>'string'],
		'xmlwriter_write_cdata' => ['bool', 'xmlwriter'=>'XMLWriter', 'content'=>'string'],
		'xmlwriter_write_comment' => ['bool', 'xmlwriter'=>'XMLWriter', 'content'=>'string'],
		'xmlwriter_write_dtd' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'publicid='=>'string', 'sysid='=>'string', 'subset='=>'string'],
		'xmlwriter_write_dtd_attlist' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'content'=>'string'],
		'xmlwriter_write_dtd_element' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'content'=>'string'],
		'xmlwriter_write_dtd_entity' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'content'=>'string', 'pe'=>'bool', 'publicid'=>'string', 'sysid'=>'string', 'ndataid'=>'string'],
		'xmlwriter_write_element' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'content'=>'string'],
		'xmlwriter_write_element_ns' => ['bool', 'xmlwriter'=>'XMLWriter', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string', 'content'=>'string'],
		'xmlwriter_write_pi' => ['bool', 'xmlwriter'=>'XMLWriter', 'target'=>'string', 'content'=>'string'],
		'xmlwriter_write_raw' => ['bool', 'xmlwriter'=>'XMLWriter', 'content'=>'string'],
	],
	'old' => [
		'array_combine' => ['associative-array|false', 'keys'=>'string[]|int[]', 'values'=>'array'],
		'bcdiv' => ['?string', 'dividend'=>'string', 'divisor'=>'string', 'scale='=>'int'],
		'bcmod' => ['?string', 'dividend'=>'string', 'divisor'=>'string', 'scale='=>'int'],
		'bcpowmod' => ['?string', 'base'=>'string', 'exponent'=>'string', 'modulus'=>'string', 'scale='=>'int'],
		'ceil' => ['__benevolent<float|false>', 'number'=>'float'],
		'convert_cyr_string' => ['string', 'str'=>'string', 'from'=>'string', 'to'=>'string'],
		'com_load_typelib' => ['bool', 'typelib_name'=>'string', 'case_insensitive='=>'bool'],
		'count_chars' => ['array<int,int>|false|string', 'input'=>'string', 'mode='=>'int'],
		'curl_init' => ['__benevolent<resource|false>', 'url='=>'string'],
		'date_add' => ['DateTime|false', 'object'=>'DateTime', 'interval'=>'DateInterval'],
		'date_date_set' => ['DateTime|false', 'object'=>'DateTime', 'year'=>'int', 'month'=>'int', 'day'=>'int'],
		'date_diff' => ['DateInterval|false', 'obj1'=>'DateTimeInterface', 'obj2'=>'DateTimeInterface', 'absolute='=>'bool'],
		'date_format' => ['string|false', 'object'=>'DateTimeInterface', 'format'=>'string'],
		'date_isodate_set' => ['DateTime|false', 'object'=>'DateTime', 'year'=>'int', 'week'=>'int', 'day='=>'int|mixed'],
		'date_parse' => ['array<string,mixed>|false', 'date'=>'string'],
		'date_sub' => ['DateTime|false', 'object'=>'DateTime', 'interval'=>'DateInterval'],
		'date_sun_info' => ['__benevolent<array{sunrise: int|bool,sunset: int|bool,transit: int|bool,civil_twilight_begin: int|bool,civil_twilight_end: int|bool,nautical_twilight_begin: int|bool,nautical_twilight_end: int|bool,astronomical_twilight_begin: int|bool,astronomical_twilight_end: int|bool}|false>', 'time'=>'int', 'latitude'=>'float', 'longitude'=>'float'],
		'date_time_set' => ['DateTime|false', 'object'=>'DateTime', 'hour'=>'int', 'minute'=>'int', 'second='=>'int', 'microseconds='=>'int'],
		'date_timestamp_set' => ['DateTime|false', 'object'=>'DateTime', 'unixtimestamp'=>'int'],
		'date_timezone_set' => ['DateTime|false', 'object'=>'DateTime', 'timezone'=>'DateTimeZone'],
		'each' => ['array{0:int|string,key:int|string,1:mixed,value:mixed}', '&r_arr'=>'array'],
		'ezmlm_hash' => ['int', 'addr'=>'string'],
		'fgetss' => ['string|false', 'fp'=>'resource', 'length='=>'0|positive-int', 'allowable_tags='=>'string'],
		'floor' => ['__benevolent<float|false>', 'number'=>'float'],
		'get_magic_quotes_gpc' => ['false'],
		'gmdate' => ['string|false', 'format'=>'string', 'timestamp='=>'int'],
		'gmmktime' => ['int|false', 'hour='=>'int', 'minute='=>'int', 'second='=>'int', 'month='=>'int', 'day='=>'int', 'year='=>'int'],
		'gmp_random' => ['GMP', 'limiter='=>'int'],
		'gzgetss' => ['string|false', 'zp'=>'resource', 'length'=>'int', 'allowable_tags='=>'string'],
		'hash' => ['non-empty-string|false', 'algo'=>'string', 'data'=>'string', 'raw_output='=>'bool'],
		'hash_hkdf' => ['non-empty-string|false', 'algo'=>'string', 'key'=>'string', 'length='=>'int', 'info='=>'string', 'salt='=>'string'],
		'hash_hmac' => ['non-empty-string|false', 'algo'=>'string', 'data'=>'string', 'key'=>'string', 'raw_output='=>'bool'],
		'hash_pbkdf2' => ['non-empty-string|false', 'algo'=>'string', 'password'=>'string', 'salt'=>'string', 'iterations'=>'int', 'length='=>'int', 'raw_output='=>'bool'],
		'hebrevc' => ['string', 'str'=>'string', 'max_chars_per_line='=>'int'],
		'image2wbmp' => ['bool', 'im'=>'resource', 'filename='=>'?string', 'threshold='=>'int'],
		'imageaffine' => ['resource|false', 'src'=>'resource', 'affine'=>'array', 'clip='=>'array'],
		'imagecreate' => ['resource|false', 'x_size'=>'int', 'y_size'=>'int'],
		'imagecreatefrombmp' => ['resource|false', 'filename'=>'string'],
		'imagecreatefromgd' => ['resource|false', 'filename'=>'string'],
		'imagecreatefromgd2' => ['resource|false', 'filename'=>'string'],
		'imagecreatefromgd2part' => ['resource|false', 'filename'=>'string', 'srcx'=>'int', 'srcy'=>'int', 'width'=>'int', 'height'=>'int'],
		'imagecreatefromgif' => ['resource|false', 'filename'=>'string'],
		'imagecreatefromjpeg' => ['resource|false', 'filename'=>'string'],
		'imagecreatefrompng' => ['resource|false', 'filename'=>'string'],
		'imagecreatefromstring' => ['resource|false', 'image'=>'string'],
		'imagecreatefromwbmp' => ['resource|false', 'filename'=>'string'],
		'imagecreatefromwebp' => ['resource|false', 'filename'=>'string'],
		'imagecreatefromxbm' => ['resource|false', 'filename'=>'string'],
		'imagecreatefromxpm' => ['resource|false', 'filename'=>'string'],
		'imagecreatetruecolor' => ['resource|false', 'x_size'=>'int', 'y_size'=>'int'],
		'imagecrop' => ['resource|false', 'im'=>'resource', 'rect'=>'array'],
		'imagecropauto' => ['resource|false', 'im'=>'resource', 'mode'=>'int', 'threshold'=>'float', 'color'=>'int'],
		'imagegetclip' => ['array<int,int>|false', 'im'=>'resource'],
		'imagegrabscreen' => ['false|resource'],
		'imagegrabwindow' => ['false|resource', 'window_handle'=>'int', 'client_area='=>'int'],
		'imagejpeg' => ['bool', 'im'=>'resource', 'filename='=>'string|resource|null', 'quality='=>'int'],
		'imagerotate' => ['resource|false', 'src_im'=>'resource', 'angle'=>'float', 'bgdcolor'=>'int', 'ignoretransparent='=>'int'],
		'imagescale' => ['resource|false', 'im'=>'resource', 'new_width'=>'int', 'new_height='=>'int', 'method='=>'int'],
		'imap_header' => ['stdClass|false', 'stream_id'=>'resource', 'msg_no'=>'int', 'from_length='=>'int', 'subject_length='=>'int', 'default_host='=>'string'],
		'implode\'1' => ['string', 'pieces'=>'array'],
		'jpeg2wbmp' => ['bool', 'jpegname'=>'string', 'wbmpname'=>'string', 'dest_height'=>'int', 'dest_width'=>'int', 'threshold'=>'int'],
		'ldap_control_paged_result' => ['bool', 'link_identifier'=>'resource', 'pagesize'=>'int', 'iscritical='=>'bool', 'cookie='=>'string'],
		'ldap_control_paged_result_response' => ['bool', 'link_identifier'=>'resource', 'result_identifier'=>'resource', '&w_cookie='=>'string', '&w_estimated='=>'int'],
		'ldap_set_rebind_proc' => ['bool', 'link_identifier'=>'resource', 'callback'=>'callable'],
		'ldap_sort' => ['bool', 'link_identifier'=>'resource', 'result_identifier'=>'resource', 'sortfilter'=>'string'],
		'mb_decode_numericentity' => ['string|false', 'string'=>'string', 'convmap'=>'array', 'encoding='=>'string', 'is_hex='=>'bool'],
		'mb_strlen' => ['0|positive-int', 'str'=>'string', 'encoding='=>'string'],
		'mktime' => ['int|false', 'hour='=>'int', 'minute='=>'int', 'second='=>'int', 'month='=>'int', 'day='=>'int', 'year='=>'int'],
		'money_format' => ['string', 'format'=>'string', 'value'=>'float'],
		'odbc_exec' => ['resource|false', 'connection_id'=>'resource', 'query'=>'string', 'flags='=>'int'],
		'parse_str' => ['void', 'encoded_string'=>'string', '&w_result='=>'array'],
		'password_hash' => ['__benevolent<non-empty-string|false|null>', 'password'=>'string', 'algo'=>'string|int', 'options='=>'array'],
		'png2wbmp' => ['bool', 'pngname'=>'string', 'wbmpname'=>'string', 'dest_height'=>'int', 'dest_width'=>'int', 'threshold'=>'int'],
		'proc_get_status' => ['array{command: string, pid: int, running: bool, signaled: bool, stopped: bool, exitcode: int, termsig: int, stopsig: int}|false', 'process'=>'resource'],
		'read_exif_data' => ['array', 'filename'=>'string', 'sections_needed='=>'string', 'sub_arrays='=>'bool', 'read_thumbnail='=>'bool'],
		'restore_include_path' => ['void'],
		'round' => ['__benevolent<float|false>', 'number'=>'float', 'precision='=>'int', 'mode='=>'1|2|3|4'],
		'socket_select' => ['int|false', '&w_read_fds'=>'resource[]|null', '&w_write_fds'=>'resource[]|null', '&w_except_fds'=>'resource[]|null', 'tv_sec'=>'int|null', 'tv_usec='=>'int|null'],
		'sodium_crypto_aead_chacha20poly1305_ietf_decrypt' => ['?string|?false', 'confidential_message'=>'string', 'public_message'=>'string', 'nonce'=>'string', 'key'=>'string'],
		'SplFileObject::fgetss' => ['string|false', 'allowable_tags='=>'string'],
		'strchr' => ['string|false', 'haystack'=>'string', 'needle'=>'string|int', 'before_needle='=>'bool'],
		'stripos' => ['0|positive-int|false', 'haystack'=>'string', 'needle'=>'string|int', 'offset='=>'int'],
		'stristr' => ['string|false', 'haystack'=>'string', 'needle'=>'string|int', 'before_needle='=>'bool'],
		'strpos' => ['int|false', 'haystack'=>'string', 'needle'=>'string|int', 'offset='=>'int'],
		'strrchr' => ['string|false', 'haystack'=>'string', 'needle'=>'string|int'],
		'strripos' => ['int|false', 'haystack'=>'string', 'needle'=>'string|int', 'offset='=>'int'],
		'strrpos' => ['int|false', 'haystack'=>'string', 'needle'=>'string|int', 'offset='=>'int'],
		'strstr' => ['string|false', 'haystack'=>'string', 'needle'=>'string|int', 'before_needle='=>'bool'],
		'substr' => ['__benevolent<string|false>', 'string'=>'string', 'start'=>'int', 'length='=>'int'],
		'version_compare' => ['int|bool', 'version1'=>'string', 'version2'=>'string', 'operator='=>'string|null'],
		'xml_get_current_column_number' => ['int', 'parser'=>'resource'],
		'xml_get_current_line_number' => ['int', 'parser'=>'resource'],
		'xml_get_error_code' => ['int', 'parser'=>'resource'],
		'xml_parse' => ['int', 'parser'=>'resource', 'data'=>'string', 'isfinal='=>'bool'],
		'xml_parse_into_struct' => ['int', 'parser'=>'resource', 'data'=>'string', '&w_values'=>'array', '&w_index='=>'array'],
		'xml_parser_create' => ['resource', 'encoding='=>'string'],
		'xml_parser_create_ns' => ['resource', 'encoding='=>'string', 'sep='=>'string'],
		'xml_parser_free' => ['bool', 'parser'=>'resource'],
		'xml_parser_get_option' => ['string|int|false', 'parser'=>'resource', 'option'=>'int'],
		'xml_parser_set_option' => ['bool', 'parser'=>'resource', 'option'=>'int', 'value'=>'string|int'],
		'xml_set_character_data_handler' => ['true', 'parser'=>'resource', 'hdl'=>'callable|string'],
		'xml_set_default_handler' => ['true', 'parser'=>'resource', 'hdl'=>'callable|string'],
		'xml_set_element_handler' => ['true', 'parser'=>'resource', 'shdl'=>'callable|string', 'ehdl'=>'callable|string'],
		'xml_set_end_namespace_decl_handler' => ['true', 'parser'=>'resource', 'hdl'=>'callable|string'],
		'xml_set_external_entity_ref_handler' => ['true', 'parser'=>'resource', 'hdl'=>'callable|string'],
		'xml_set_notation_decl_handler' => ['true', 'parser'=>'resource', 'hdl'=>'callable|string'],
		'xml_set_object' => ['true', 'parser'=>'resource', 'obj'=>'object'],
		'xml_set_processing_instruction_handler' => ['true', 'parser'=>'resource', 'hdl'=>'callable|string'],
		'xml_set_start_namespace_decl_handler' => ['true', 'parser'=>'resource', 'hdl'=>'callable|string'],
		'xml_set_unparsed_entity_decl_handler' => ['true', 'parser'=>'resource', 'hdl'=>'callable|string'],
		'xmlwriter_end_attribute' => ['bool', 'xmlwriter'=>'resource'],
		'xmlwriter_end_cdata' => ['bool', 'xmlwriter'=>'resource'],
		'xmlwriter_end_comment' => ['bool', 'xmlwriter'=>'resource'],
		'xmlwriter_end_document' => ['bool', 'xmlwriter'=>'resource'],
		'xmlwriter_end_dtd' => ['bool', 'xmlwriter'=>'resource'],
		'xmlwriter_end_dtd_attlist' => ['bool', 'xmlwriter'=>'resource'],
		'xmlwriter_end_dtd_element' => ['bool', 'xmlwriter'=>'resource'],
		'xmlwriter_end_dtd_entity' => ['bool', 'xmlwriter'=>'resource'],
		'xmlwriter_end_element' => ['bool', 'xmlwriter'=>'resource'],
		'xmlwriter_end_pi' => ['bool', 'xmlwriter'=>'resource'],
		'xmlwriter_flush' => ['mixed', 'xmlwriter'=>'resource', 'empty='=>'bool'],
		'xmlwriter_full_end_element' => ['bool', 'xmlwriter'=>'resource'],
		'xmlwriter_open_memory' => ['resource'],
		'xmlwriter_open_uri' => ['resource', 'source'=>'string'],
		'xmlwriter_output_memory' => ['string', 'xmlwriter'=>'resource', 'flush='=>'bool'],
		'xmlwriter_set_indent' => ['bool', 'xmlwriter'=>'resource', 'indent'=>'bool'],
		'xmlwriter_set_indent_string' => ['bool', 'xmlwriter'=>'resource', 'indentstring'=>'string'],
		'xmlwriter_start_attribute' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string'],
		'xmlwriter_start_attribute_ns' => ['bool', 'xmlwriter'=>'resource', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string'],
		'xmlwriter_start_cdata' => ['bool', 'xmlwriter'=>'resource'],
		'xmlwriter_start_comment' => ['bool', 'xmlwriter'=>'resource'],
		'xmlwriter_start_document' => ['bool', 'xmlwriter'=>'resource', 'version='=>'string', 'encoding='=>'string', 'standalone='=>'string'],
		'xmlwriter_start_dtd' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'publicid='=>'string', 'sysid='=>'string'],
		'xmlwriter_start_dtd_attlist' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string'],
		'xmlwriter_start_dtd_element' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string'],
		'xmlwriter_start_dtd_entity' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'isparam'=>'bool'],
		'xmlwriter_start_element' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string'],
		'xmlwriter_start_element_ns' => ['bool', 'xmlwriter'=>'resource', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string|null'],
		'xmlwriter_start_pi' => ['bool', 'xmlwriter'=>'resource', 'target'=>'string'],
		'xmlwriter_text' => ['bool', 'xmlwriter'=>'resource', 'content'=>'string'],
		'xmlwriter_write_attribute' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'content'=>'string'],
		'xmlwriter_write_attribute_ns' => ['bool', 'xmlwriter'=>'resource', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string', 'content'=>'string'],
		'xmlwriter_write_cdata' => ['bool', 'xmlwriter'=>'resource', 'content'=>'string'],
		'xmlwriter_write_comment' => ['bool', 'xmlwriter'=>'resource', 'content'=>'string'],
		'xmlwriter_write_dtd' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'publicid='=>'string', 'sysid='=>'string', 'subset='=>'string'],
		'xmlwriter_write_dtd_attlist' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'content'=>'string'],
		'xmlwriter_write_dtd_element' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'content'=>'string'],
		'xmlwriter_write_dtd_entity' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'content'=>'string', 'pe'=>'bool', 'publicid'=>'string', 'sysid'=>'string', 'ndataid'=>'string'],
		'xmlwriter_write_element' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'content'=>'string'],
		'xmlwriter_write_element_ns' => ['bool', 'xmlwriter'=>'resource', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string', 'content'=>'string'],
		'xmlwriter_write_pi' => ['bool', 'xmlwriter'=>'resource', 'target'=>'string', 'content'=>'string'],
		'xmlwriter_write_raw' => ['bool', 'xmlwriter'=>'resource', 'content'=>'string'],
	]
];
