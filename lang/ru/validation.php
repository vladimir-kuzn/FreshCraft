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

    'accepted' => ':attribute должен быть принят.',
    'accepted_if' => ':attribute должен быть принят, когда :other is :value.',
    'active_url' => ':attribute не является действительным URL.',
    'after' => ':attribute должна быть дата после :date.',
    'after_or_equal' => ':attribute должна быть дата после или равной :date.',
    'alpha' => ':attribute должен содержать только буквы.',
    'alpha_dash' => ':attribute должен содержать только буквы, цифры, тире и подчеркивание.',
    'alpha_num' => ':attribute должен содержать только буквы и цифры.',
    'array' => ':attribute должен быть массив.',
    'before' => ':attribute должен быть датой до :date.',
    'before_or_equal' => ':attribute должен быть дата до или равной :date.',
    'between' => [
        'array' => ':attribute должен иметь между :min и :max предметов.',
        'file' => ':attribute должен быть между :min и :max килобайтов.',
        'numeric' => ':attribute должен быть между :min и :max.',
        'string' => ':attribute должен быть между :min и :max символов.',
    ],
    'boolean' => ':attribute поле должно быть истинным или ложным.',
    'confirmed' => ':attribute подтверждение не соответствует.',
    'current_password' => 'Пароль неправильный.',
    'date' => ':attribute не является действительной датой.',
    'date_equals' => ':attribute должна быть дата, равная :date.',
    'date_format' => ':attribute не соответствует формату :format.',
    'declined' => ':attribute должен быть отклонен.',
    'declined_if' => ':attribute должен быть отклонен, когда :other :value.',
    'different' => ':attribute и :other должно быть иначе.',
    'digits' => ':attribute должно быть :digits цифры.',
    'digits_between' => ':attribute должен быть между :min и :max цифры.',
    'dimensions' => ':attribute имеет недопустимые размеры изображения.',
    'distinct' => ':attribute поле имеет дубликатное значение.',
    'doesnt_end_with' => ':attribute не может закончиться одним из следующих: :values.',
    'doesnt_start_with' => ':attribute может не начать с одного из следующих: :values.',
    'email' => ':attribute адрес эл. почты должен быть действительным.',
    'ends_with' => ':attribute должен закончиться одним из следующих: :values.',
    'enum' => 'Выбранный :attribute является недействительным.',
    'exists' => 'Выбранный :attribute является недействительным.',
    'file' => ':attribute должен быть файлом.',
    'filled' => ':attribute поле должно иметь значение.',
    'gt' => [
        'array' => ':attribute должно быть больше, чем :value предметов.',
        'file' => ':attribute должен быть больше, чем :value килобайтов.',
        'numeric' => ':attribute должен быть больше, чем :value.',
        'string' => ':attribute должен быть больше, чем :value символов.',
    ],
    'gte' => [
        'array' => ':attribute должны быть :value предметов или больше.',
        'file' => ':attribute должен быть больше или равен :value килобайтов.',
        'numeric' => ':attribute должен быть больше или равен :value.',
        'string' => ':attribute должен быть больше или равен :value символы.',
    ],
    'image' => ':attribute должен быть изображение.',
    'in' => 'Выбранный :attribute является недействительным.',
    'in_array' => ':attribute поле не существует в :other.',
    'integer' => ':attribute должно быть целое число.',
    'ip' => ':attribute должен быть действительный IP -адрес.',
    'ipv4' => ':attribute должен быть действительный адрес IPv4.',
    'ipv6' => ':attribute должен быть действительный адрес IPv6.',
    'json' => ':attribute должен быть действующая строка JSON.',
    'lowercase' => ':attribute должен быть в нижнем регистре.',
    'lt' => [
        'array' => ':attribute должен иметь меньше, чем :value предметов.',
        'file' => ':attribute должно быть меньше, чем :value килобайтов.',
        'numeric' => ':attribute должно быть меньше, чем :value.',
        'string' => ':attribute должно быть меньше, чем :value символы.',
    ],
    'lte' => [
        'array' => ':attribute не должно быть больше, чем :value предметов.',
        'file' => ':attribute должен быть меньше или равен :value килобайтов.',
        'numeric' => ':attribute должен быть меньше или равен :value.',
        'string' => ':attribute должен быть меньше или равен :value символов.',
    ],
    'mac_address' => ':attribute Должен быть действительный MAC -адрес.',
    'max' => [
        'array' => ':attribute не должно быть больше, чем :max предметов.',
        'file' => ':attribute не должно быть больше, чем :max килобайтов.',
        'numeric' => ':attribute не должно быть больше, чем :max.',
        'string' => ':attribute не должно быть больше, чем :max символов.',
    ],
    'max_digits' => ':attribute не должно быть больше, чем :max цифр.',
    'mimes' => ':attribute Должен быть файл типа: :values.',
    'mimetypes' => ':attribute Должен быть файл типа: :values.',
    'min' => [
        'array' => ':attribute Должен быть хотя бы :min предметов.',
        'file' => ':attribute должен быть не менее :min килобайтов.',
        'numeric' => ':attribute должен быть не менее :min.',
        'string' => ':attribute должен быть не менее :min символов.',
    ],
    'min_digits' => ':attribute должен быть хотя бы :min цифр.',
    'multiple_of' => ':attribute должен быть кратный :value.',
    'not_in' => 'Выбранный :attribute является недействительным.',
    'not_regex' => ':attribute формат недействителен.',
    'numeric' => ':attribute должнен быть числом.',
    'password' => [
        'letters' => ':attribute должен содержать хотя бы одну букву.',
        'mixed' => ':attribute должен содержать как минимум одну верхнюю и одну строчную букву.',
        'numbers' => ':attribute должен содержать хотя бы одно число.',
        'symbols' => ':attribute должен содержать хотя бы один символ.',
        'uncompromised' => 'Данный :attribute появился в утечке данных. Пожалуйста, выберите другой :attribute.',
    ],
    'present' => ':attribute поле должно присутствовать.',
    'prohibited' => ':attribute поле запрещено.',
    'prohibited_if' => ':attribute поле запрещено, когда :other является :value.',
    'prohibited_unless' => ':attribute поле запрещено, если :other в :values.',
    'prohibits' => ':attribute поле запрещает :other от присутствия.',
    'regex' => ':attribute формат недействителен.',
    'required' => ':attribute поле, обязательное для заполнения.',
    'required_array_keys' => ':attribute поле должно содержать записи для: :values.',
    'required_if' => ':attribute поле требуется, когда :other :value.',
    'required_if_accepted' => ':attribute поле требуется, когда :other принимается.',
    'required_unless' => ':attribute поле требуется, если :other в :values.',
    'required_with' => ':attribute поле требуется, когда :values настоящее.',
    'required_with_all' => ':attribute поле требуется, когда :values присутствуют.',
    'required_without' => ':attribute поле требуется, когда :values нет.',
    'required_without_all' => ':attribute поле требуется, когда нет :values присутствуют.',
    'same' => ':attribute и :other должен соответствовать.',
    'size' => [
        'array' => ':attribute должен содержать :size предметов.',
        'file' => ':attribute должно быть :size килобайтов.',
        'numeric' => ':attribute должно быть :size.',
        'string' => ':attribute должно быть :size символов.',
    ],
    'starts_with' => ':attribute должен начать с одного из следующих: :values.',
    'string' => ':attribute Должен быть строка.',
    'timezone' => ':attribute Должен быть действительный часовой пояс.',
    'unique' => ':attribute уже занят.',
    'uploaded' => ':attribute не удалось загрузить.',
    'uppercase' => ':attribute Должен быть прописным.',
    'url' => ':attribute Должен быть действительный URL.',
    'uuid' => ':attribute Должен быть действительный uuid.',

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
        'attribute-name' => [
            'rule-name' => 'custom-message',
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
