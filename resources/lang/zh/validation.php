<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => '必须允许 :attribute。',
    'accepted_if' => '当 :other 为 :value 时，必须允许 :attribute 。',
    'active_url' => ':attribute 必须是正确的网址。',
    'after' => ':attribute 必须要晚于 :date。',
    'after_or_equal' => ':attribute 必须要等于 :date 或更晚。',
    'alpha' => ':attribute 只能包含字母。',
    'alpha_dash' => ':attribute 只能由字母、数字、减号 (-) 与下划线 (_) 组成。',
    'alpha_num' => ':attribute 必须包含字母与数字',
    'array' => ':attribute 必须是一个数组。',
    'ascii' => ':attribute 只能包含单个字母和符号。',
    'before' => ':attribute 必须要早于 :date。',
    'before_or_equal' => ':attribute 必须要等于 :date 或更早。',
    'between' => [
        'array' => ':attribute 必须介于 :min - :max 位之间。',
        'file' => ':attribute 必须介于 :min - :max KB 之间。',
        'numeric' => ':attribute 必须介于 :min - :max 之间。',
        'string' => ':attribute 必须介于 :min - :max 个字符之间。',
    ],
    'boolean' => ':attribute 必须为布尔值。',
    'can' => ':attribute 字段包含非法的值。',
    'confirmed' => ':attribute 两次输入不一致。',
    'contains' => ':attribute 缺少必需的值。',
    'current_password' => '密码错误',
    'date' => ':attribute 必须是有效的日期格式。',
    'date_equals' => ':attribute 必须要等于 :date。',
    'date_format' => ':attribute 的格式必须为 :format。',
    'decimal' => ':attribute 必须有 :decimal 位小数。',
    'declined' => '必须拒绝 :attribute。',
    'declined_if' => '当 :other 为 :value 时，必须拒绝 :attribute 。',
    'different' => ':attribute 与 :other 必须不同。',
    'digits' => ':attribute 必须为 :digits 位数字。',
    'digits_between' => ':attribute 必须介于 :min 和 :max 位数字之间。',
    'dimensions' => ':attribute 图片尺寸不正确。',
    'distinct' => ':attribute 已经存在。',
    'doesnt_end_with' => ':attribute 不能以这些值结尾：:values。',
    'doesnt_start_with' => ':attribute 不能以这些值开头：:values。',
    'email' => ':attribute 必须是正确的邮箱。',
    'ends_with' => ':attribute 必须以 :values 为结尾。',
    'enum' => '选中的 :attribute 无效。',
    'exists' => ':attribute 不存在。',
    'extensions' => ':attribute 必须包含以下扩展名之一 :values。',
    'file' => ':attribute 必须是文件。',
    'filled' => ':attribute 不能为空。',
    'gt' => [
        'array' => ':attribute 至少包含 :value 个项。',
        'file' => ':attribute 必须大于 :value KB。',
        'numeric' => ':attribute 必须大于 :value。',
        'string' => ':attribute 至少包含 :value 个字符。',
    ],
    'gte' => [
        'array' => ':attribute 至少包含 :value 个项。',
        'file' => ':attribute 必须大于或等于 :value KB。',
        'numeric' => ':attribute 必须大于或等于 :value。',
        'string' => ':attribute 至少为 :value 个字符。',
    ],
    'hex_color' => ':attribute 必须为有效的 HEX 颜色码。',
    'image' => ':attribute 必须是图片。',
    'in' => '已选的属性 :attribute 无效。',
    'in_array' => ':attribute 必须在 :other 中。',
    'integer' => ':attribute 必须是整数。',
    'ip' => ':attribute 必须是正确的 IP 地址。',
    'ipv4' => ':attribute 必须是正确的 IPv4 地址。',
    'ipv6' => ':attribute 必须是正确的 IPv6 地址。',
    'json' => ':attribute 必须是正确的 JSON 字符串。',
    'list' => ':attribute 必须为列表。',
    'lowercase' => ':attribute 必须是小写字母。',
    'lt' => [
        'array' => ':attribute 最多包含 :value 个项。',
        'file' => ':attribute 必须小于 :value KB。',
        'numeric' => ':attribute 必须小于 :value。',
        'string' => ':attribute 必须少于 :value 个字符。',
    ],
    'lte' => [
        'array' => ':attribute 必须少于或等于 :value 个元素。',
        'file' => ':attribute 必须小于或等于 :value KB。',
        'numeric' => ':attribute 必须小于或等于 :value。',
        'string' => ':attribute 必须小于或等于 :value 个字符。',
    ],
    'mac_address' => ':attribute 必须是正确的 MAC 地址。',
    'max' => [
        'array' => ':attribute 必须少于 :max 项。',
        'file' => ':attribute 必须小于 :max KB。',
        'numeric' => ':attribute 必须小于 :max。',
        'string' => ':attribute 必须少于 :max 个字符。',
    ],
    'max_digits' => ':attribute 必须少于 :max 位。',
    'mimes' => ':attribute 必须是一个 :values 类型的文件。',
    'mimetypes' => ':attribute 必须是一个 :values 类型的文件。',
    'min' => [
        'array' => ':attribute 至少包含 :min 个项。',
        'file' => ':attribute 至少为 :min KB。',
        'numeric' => ':attribute 至少为 :min。',
        'string' => ':attribute 至少为 :min 个字符。',
    ],
    'min_digits' => ':attribute 必须多于 :min 位。',
    'missing' => ':attribute 必须为空。',
    'missing_if' => '当 :other 为 :value 时 :attribute 必须为空。',
    'missing_unless' => '除非 :other 为 :value，否则 :attribute 必须为空。',
    'missing_with' => '当 :value 存在时，:attribute 必须为空。',
    'missing_with_all' => '当 :value 存在时，:attribute 必须为空。',
    'multiple_of' => ':attribute 必须是 :value 的倍数。',
    'not_in' => '已选的属性 :attribute 非法。',
    'not_regex' => ':attribute 的格式错误。',
    'numeric' => ':attribute 必须是一个数字。',
    'password' => [
        'letters' => ':attribute 至少要包含一个字母。',
        'mixed' => ':attribute 至少要包含一个大写字母和一个小写字母。',
        'numbers' => ':attribute 至少要包含一个数字。',
        'symbols' => ':attribute 至少要包含一个符号。',
        'uncompromised' => '输入的 :attribute 已在数据泄露中出现过。请选择其他的 :attribute。',
    ],
    'present' => ':attribute 必须存在。',
    'present_if' => '当 :other 为 :value 时，:attribute 为必填项',
    'present_unless' => '除非 :other 为 :value，否则 :attribute 为必填项。',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => '已禁止 :attribute 字段。',
    'prohibited_if' => '当 :other 为 :value 时，:attribute 字段被禁止。',
    'prohibited_unless' => '除非 :other 为 :values，否则 :attribute 字段会被禁止。',
    'prohibits' => ':attribute 字段禁止出现 :other。',
    'regex' => ':attribute 格式错误。',
    'required' => ':attribute 不能为空。',
    'required_array_keys' => ':attribute 字段必须包含: :values。',
    'required_if' => '当 :other 为 :value 时 :attribute 不能为空。',
    'required_if_accepted' => '当 :other 存在时，:attribute 不能为空。',
    'required_if_declined' => '当 :other 不存在时，:attribute 不能为空。',
    'required_unless' => '当 :other 不为 :values 时 :attribute 不能为空。',
    'required_with' => '当 :values 存在时 :attribute 不能为空。',
    'required_with_all' => '当 :values 存在时 :attribute 不能为空。',
    'required_without' => '当 :values 不存在时 :attribute 不能为空。',
    'required_without_all' => '当 :values 都不存在时 :attribute 不能为空。',
    'same' => ':attribute 与 :other 必须相同。',
    'size' => [
        'array' => ':attribute 必须包含 :size 项。',
        'file' => ':attribute 大小必须为 :size KB。',
        'numeric' => ':attribute 大小必须为 :size。',
        'string' => ':attribute 必须为 :size 个字符。',
    ],
    'starts_with' => ':attribute 必须以 :values 开头。',
    'string' => ':attribute 必须为字符串。',
    'timezone' => ':attribute 必须是一个有效的时区。',
    'unique' => ':attribute 已经存在。',
    'uploaded' => ':attribute 上传失败。',
    'uppercase' => ':attribute 必须是大写字母。',
    'url' => ':attribute 必须是有效的 URL。',
    'ulid' => ':attribute 必须是有效的 ULID。',
    'uuid' => ':attribute 必须是有效的 UUID。',

    'single' => '当使用 :attribute 时，请求的数据包中只能包含这一种参数。',
    'onlyCustomOtpWithUri' => '“uri” 参数必须单独提供，或与 “custom_otp” 参数同时提供。',
    'IsValidRegex' => ':attribute 必须是正确的 regex 表达式。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'icon' => [
            'image' => '仅支持 jpeg、png、bmp、gif、svg 或 webp 格式。',
        ],
        'qrcode' => [
            'image' => '仅支持 jpeg、png、bmp、gif、svg 或 webp 格式。',
        ],
        'uri' => [
            'regex' => ':attribute 不是有效的 otpauth uri。',
        ],
        'otp_type' => [
            'in' => '不支持 :attribute 项。',
        ],
        'email' => [
            'exists' => '未找到与此邮箱匹配的账户。',
            'ComplyWithEmailRestrictionPolicy' => '此邮箱地址不允许注册',
            'IsValidEmailList' => '所有邮箱地址必须是有效的，并用管道符隔开'
        ],
        'secret' => [
            'isBase32Encoded' => ':attribute 必须是 Base32 编码的字符串。',
        ],
        'account' => [
            'regex' => ':attribute 不能包含冒号。',
        ],
        'service' => [
            'regex' => ':attribute 不能包含冒号。',
        ],
        'label' => [
            'required' => '必须未 url 分配一个标签。',
        ],
        'ids' => [
            'regex' => 'ID 必须以逗号分隔，且不能以逗号结尾。',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
