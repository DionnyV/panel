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

    'accepted' => 'El campo :attribute debe ser aceptado.',
    'active_url' => 'El campo :attribute no es una URL válida.',
    'after' => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El campo :attribute solo puede contener letras.',
    'alpha_dash' => 'El campo :attribute solo puede contener letras, números y guiones.',
    'alpha_num' => 'El campo :attribute solo puede contener letras y números.',
    'array' => 'El campo :attribute debe ser un array.',
    'before' => 'El campo :attribute debe ser una fecha antes :date.',
    'before_or_equal' => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => 'El campo :attribute debe estar entre :min y :max.',
        'file' => 'El campo :attribute debe estar entre :min y :max kilobytes.',
        'string' => 'El campo :attribute debe estar entre :min y :max caracteres.',
        'array' => 'El campo :attribute debe tener entre :min y :max items.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed' => 'El campo :attribute confirmación no coincide.',
    'date' => 'El campo :attribute no es una fecha válida.',
    'date_format' => 'El campo :attribute no coincide con el formato :format.',
    'different' => 'El campo :attribute y :other deben ser diferentes.',
    'digits' => 'El campo :attribute deben ser :digits dígitos.',
    'digits_between' => 'El campo :attribute debe estar entre :min y :max dígitos.',
    'dimensions' => 'El campo :attribute tiene dimensiones de imagen no válidas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'email' => 'El campo :attribute debe ser una dirección de correo electrónico válida.',
    'exists' => 'El campo seleccionado :attribute es inválido.',
    'file' => 'El campo :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute es requerido.',
    'image' => 'El campo :attribute debe ser una imagen.',
    'in' => 'El campo seleccionado :attribute es inválido.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => 'El campo :attribute debe ser un número entero.',
    'ip' => 'El campo :attribute debe ser una dirección IP válida.',
    'json' => 'El campo :attribute debe ser un string JSON válido.',
    'max' => [
        'numeric' => 'El campo :attribute no puede ser mayor que :max.',
        'file' => 'El campo :attribute no puede ser mayor que :max kilobytes.',
        'string' => 'El campo :attribute no puede ser mayor que :max caracteres.',
        'array' => 'El campo :attribute no puede tener más de :max ítems.',
    ],
    'mimes' => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => 'El campo :attribute al menos debe ser :min.',
        'file' => 'El campo :attribute al menos debe ser :min kilobytes.',
        'string' => 'El campo :attribute al menos debe ser :min caracteres.',
        'array' => 'El campo :attribute debe tener al menos :min ítems.',
    ],
    'not_in' => 'El campo seleccionado :attribute es inválido.',
    'numeric' => 'El campo :attribute tiene que ser un número.',
    'present' => 'El campo :attribute debe estar presente.',
    'regex' => 'El formato :attribute no es válido.',
    'required' => 'El campo :attribute es requerido.',
    'required_if' => 'El campo :attribute es requiere cuando :other es :value.',
    'required_unless' => 'El campo :attribute es requiere a menos que :other es :values.',
    'required_with' => 'El campo :attribute es requiere cuando :values está presente.',
    'required_with_all' => 'El campo :attribute es requiere cuando :values está presente.',
    'required_without' => 'El campo :attribute es requiere cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es requiere cuando ninguno de :values están presentes.',
    'same' => 'El campo :attribute y :other deben coincidir.',
    'size' => [
        'numeric' => 'El campo :attribute debe ser :size.',
        'file' => 'El campo :attribute debe ser :size kilobytes.',
        'string' => 'El campo :attribute debe ser :size characters.',
        'array' => 'El campo :attribute debe contener :size ítems.',
    ],
    'string' => 'El campo :attributedebe ser un string.',
    'timezone' => 'El campo :attribute debe ser una zona válida.',
    'unique' => 'El campo :attribute ya ha sido tomado.',
    'uploaded' => 'El campo :attribute no se pudo cargar.',
    'url' => 'El formato :attribute es inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

    // Internal validation logic for Pterodactyl
    'internal' => [
        'variable_value' => ':env variable',
    ],
];
