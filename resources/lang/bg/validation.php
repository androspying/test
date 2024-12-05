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

    'accepted' => 'Полето :attribute трябва да бъде приетo.',
    'accepted_if' => 'Полето :attribute да бъде приет когато :other е :value.',
    'active_url' => 'Полето :attribute не е валиден URL.',
    'after' => 'Полето :attribute трябва да е дата след :date.',
    'after_or_equal' => 'Полето :attribute трябва да е дата след или равна на :date.',
    'alpha' => 'Полето :attribute трябва да съдържа само букви.',
    'alpha_dash' => 'Полето :attribute трябва да съдържа само букви, цифри, долна черта и тире.',
    'alpha_num' => 'Полето :attribute трябва да съдържа само букви и цифри.',
    'array' => 'Полето :attribute трябва да е низ.',
    'ascii' => 'The :attribute field must only contain single-byte alphanumeric characters and symbols.',
    'before' => 'Полето :attribute трябва да е дата преди :date.',
    'before_or_equal' => 'Полето :attribute трябва да е дата преди или равна на :date.',
    'between' => [
        'array' => 'Полето :attribute трябва да е между :min и :max елемента.',
        'file' => 'Полето :attribute трябва да е между :min и :max килобайта.',
        'numeric' => 'Полето :attribute трябва да е между :min и :max.',
        'string' => 'Полето :attribute трябва да е между :min и :max символа.',
    ],
    'boolean' => 'Полето :attribute трябва да съдържа булева стойност (true или false).',
    'can' => 'The :attribute field contains an unauthorized value.',
    'confirmed' => 'Потвърждението на полето :attribute не съвпада.',
    'contains' => 'The :attribute field is missing a required value.',
    'current_password' => 'Паролата е грешна.',
    'date' => 'Полето :attribute не е валидна дата.',
    'date_equals' => 'Полето :attribute трябва да е дата равна на :date.',
    'date_format' => 'Полето :attribute не съвпада с формата :format.',
    'decimal' => 'The :attribute field must have :decimal decimal places.',
    'declined' => 'Полето :attribute трябва да бъде отказано.',
    'declined_if' => 'Полето :attribute трябва да бъде отказано когато :other е :value.',
    'different' => 'Полето :attribute и :other трябва да са различни.',
    'digits' => 'Полето :attribute трябва да е :digits цифри.',
    'digits_between' => 'Полето :attribute трябва да е между :min и :max цифри.',
    'dimensions' => 'Полето :attribute съдържа невалидни размери.',
    'distinct' => 'Полето :attribute има дублирана стойност.',
    'doesnt_end_with' => 'Полето :Attribute трябва да завършва с една от следните стойности: :values.',
    'doesnt_start_with' => 'Полето :Attribute трябва да започва с едно от следните: :values.',
    'email' => 'Полето :attribute трябва да съдържа валиден имейл.',
    'ends_with' => 'Полето :attribute трябва да завърпва с една от следните стойности: :values.',
    'enum' => 'Избраното :attribute е невалидно.',
    'exists' => 'Избраното поле :attribute е невалидно.',
    'extensions' => 'The :attribute field must have one of the following extensions: :values.',
    'file' => 'Полето :attribute трябва да е файл.',
    'filled' => 'Полето :attribute трябва да съдържа стойнот.',
    'gt' => [
        'array' => ':Attribute трябва да разполага с повече от :value елемента.',
        'file' => 'Полето :attribute трябва да е по-голямо от :value килобакта.',
        'numeric' => 'Полето :attribute трябва да е по-голямо от :value.',
        'string' => 'Дължината на :attribute трябва да бъде по-голямо от :value символа.',
    ],
    'gte' => [
        'array' => ':attribute трябва да има :value елемента или повече.',
        'file' => ':attribute трябва да е по-голям или равн на :value Kb.',
        'numeric' => ':attribute трябва да е по-голямо или равно на :value.',
        'string' => ':attribute трябва да е повече или равно на :value символа.',
    ],
    'hex_color' => 'The :attribute field must be a valid hexadecimal color.',
    'image' => ':attribute трябва да e изображение.',
    'in' => 'Избраният :attribute е невалиден.',
    'in_array' => 'Полето :attribute не съществува в :other.',
    'integer' => ':attribute трябва да бъде цяло число.',
    'ip' => ':attribute трябва да бъде валиден IP адрес.',
    'ipv4' => ':attribute трябва да бъде валиден IPv4 адрес.',
    'ipv6' => ':attribute трябва да бъде валиден IPv6 адрес.',
    'json' => ':attribute трябва да съдържа валиден JSON.',
    'list' => 'The :attribute field must be a list.',
    'lowercase' => 'The :attribute field must be lowercase.',
    'lt' => [
        'array' => ':attribute трябва да разполага с по-малко от :value елемента.',
        'file' => ':attribute не трябва да е по-голям от :value килобакта.',
        'numeric' => ':attribute трябва да бъде по-малко от :value.',
        'string' => ':Attribute трябва да бъде по-малка от :value знака.',
    ],
    'lte' => [
        'array' => ':attribute не трябва да има повече от :value елемента.',
        'file' => ':attribute трябва да бъде по-малък от или равен на :value килобайта.',
        'numeric' => ':attribute трябва да бъде по-малко или равно на :value.',
        'string' => ':attribute трябва да бъде по-малко от или равно на :value знака.',
    ],
    'mac_address' => ':attribute трябва да бъде валиден MAC адрес.',
    'max' => [
        'array' => ':attribute не трябва да има повече от :max елемента.',
        'file' => ':attribute не трябва да бъде по-голямо от :max килобайта.',
        'numeric' => ':attribute не трябва да бъде по-голям от :max.',
        'string' => 'Полето :attribute трябва да бъде по-малко от :max знака.',
    ],
    'max_digits' => 'Полето :attribute трябва да има по-малко от :max елемента.',
    'mimes' => 'Полето :attribute трябва да бъде файл от тип: :values.',
    'mimetypes' => 'Полето :attribute трябва да бъде файл от тип: :values.',
    'min' => [
        'array' => 'Полето :attribute трябва да има поне :min елемента.',
        'file' => 'Полето :attribute трябва да бъде с големина минимум :min KB.',
        'numeric' => 'Полето :attribute трябва да бъде минимум :min.',
        'string' => 'Полето :attribute трябва да бъде минимум :min знака.',
    ],
    'min_digits' => 'Полето :attribute трябва има минимум :min числа.',
    'missing' => 'The :attribute field must be missing.',
    'missing_if' => 'The :attribute field must be missing when :other is :value.',
    'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
    'missing_with' => 'The :attribute field must be missing when :values is present.',
    'missing_with_all' => 'The :attribute field must be missing when :values are present.',
    'multiple_of' => 'Числото :attribute трябва да бъде кратно на :value.',
    'not_in' => 'Избраният :attribute е невалиден.',
    'not_regex' => ':attribute е с невалиден формат.',
    'numeric' => ':attribute трябва да бъде число.',
    'password' => [
        'letters' => 'Полето :attribute трябва да съдържа поне една буква.',
        'mixed' => 'Полето :attribute трябва да съдържа поне една главна и една малка буква.',
        'numbers' => 'Полето :attribute трябва да съдържа поне една цифра.',
        'symbols' => 'Полето :attribute трябва да съдържа поне един символ.',
        'uncompromised' => 'Избраната :attribute съществува е дейта лийк. Моля изберете друга :attribute.',
    ],
    'present' => 'Полето :attribute трябва да съществува.',
    'present_if' => 'The :attribute field must be present when :other is :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => 'Поле :attribute е забранено.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'array' => 'The :attribute must contain :size items.',
        'file' => 'The :attribute must be :size kilobytes.',
        'numeric' => 'The :attribute must be :size.',
        'string' => 'The :attribute must be :size characters.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'uppercase' => 'The :attribute field must be uppercase.',
    'url' => 'The :attribute must be a valid URL.',
    'ulid' => 'The :attribute field must be a valid ULID.',
    'uuid' => 'The :attribute must be a valid UUID.',

    'single' => 'When using :attribute it must be the only parameter in this request body',
    'onlyCustomOtpWithUri' => 'The uri parameter must be provided alone or only in combination with the \'custom_otp\' parameter',
    'IsValidRegex' => 'The :attribute must be a valid regex pattern.',

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
            'image' => 'Supported format are jpeg, png, bmp, gif, svg, or webp.',
        ],
        'qrcode' => [
            'image' => 'Supported format are jpeg, png, bmp, gif, svg, or webp.',
        ],
        'uri' => [
            'regex' => 'The :attribute is not a valid otpauth uri.',
        ],
        'otp_type' => [
            'in' => 'The :attribute is not supported.',
        ],
        'email' => [
            'exists' => 'Не е намерен акаунт с този имейл.',
            'ComplyWithEmailRestrictionPolicy' => 'This email address does not comply with the registration policy',
            'IsValidEmailList' => 'All emails must be valid and separated with a pipe'
        ],
        'secret' => [
            'isBase32Encoded' => 'The :attribute must be a base32 encoded string.',
        ],
        'account' => [
            'regex' => 'The :attribute must not contain colon.',
        ],
        'service' => [
            'regex' => 'The :attribute must not contain colon.',
        ],
        'label' => [
            'required' => 'Адресът трябва да има етикет.',
        ],
        'ids' => [
            'regex' => 'ID-тата трябва да са разделени със запетая, и да не завършват с такава.',
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
