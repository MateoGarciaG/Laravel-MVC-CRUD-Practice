<?php

return [
    'accepted'             => 'Este campo debe ser aceptado.',
    'accepted_if'          => 'Este campo debe ser aceptado cuando :other sea :value.',
    'active_url'           => 'Esta no es una URL válida.',
    'after'                => 'Debe ser una fecha después de :date.',
    'after_or_equal'       => 'Debe ser una fecha después o igual a :date.',
    'alpha'                => 'Este campo solo puede contener letras.',
    'alpha_dash'           => 'Este campo solo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num'            => 'Este campo solo puede contener letras y números.',
    'array'                => 'Este campo debe ser un array (colección).',
    'attached'             => 'Este campo ya se adjuntó.',
    'before'               => 'Debe ser una fecha antes de :date.',
    'before_or_equal'      => 'Debe ser una fecha anterior o igual a :date.',
    'between'              => [
        'array'   => 'El contenido debe tener entre :min y :max elementos.',
        'file'    => 'Este archivo debe ser entre :min y :max kilobytes.',
        'numeric' => 'Este valor debe ser entre :min y :max.',
        'string'  => 'El texto debe ser entre :min y :max caracteres.',
    ],
    'boolean'              => 'El campo debe ser verdadero o falso.',
    'confirmed'            => 'La confirmación no coincide.',
    'current_password'     => 'La contraseña es incorrecta.',
    'date'                 => 'Esta no es una fecha válida.',
    'date_equals'          => 'El campo debe ser una fecha igual a :date.',
    'date_format'          => 'El campo no corresponde al formato :format.',
    'declined'             => 'This value must be declined.',
    'declined_if'          => 'This value must be declined when :other is :value.',
    'different'            => 'Este valor deben ser diferente de :other.',
    'digits'               => 'Debe tener :digits dígitos.',
    'digits_between'       => 'Debe tener entre :min y :max dígitos.',
    'dimensions'           => 'Las dimensiones de esta imagen son inválidas.',
    'distinct'             => 'El campo tiene un valor duplicado.',
    'email'                => 'No es un correo válido.',
    'ends_with'            => 'Debe finalizar con uno de los siguientes valores: :values.',
    'exists'               => 'El valor seleccionado es inválido.',
    'file'                 => 'El campo debe ser un archivo.',
    'filled'               => 'Este campo debe tener un valor.',
    'gt'                   => [
        'array'   => 'El contenido debe tener mas de :value elementos.',
        'file'    => 'El archivo debe ser mayor que :value kilobytes.',
        'numeric' => 'El valor del campo debe ser mayor que :value.',
        'string'  => 'El texto debe ser mayor de :value caracteres.',
    ],
    'gte'                  => [
        'array'   => 'El contenido debe tener :value elementos o más.',
        'file'    => 'El tamaño del archivo debe ser mayor o igual que :value kilobytes.',
        'numeric' => 'El valor debe ser mayor o igual que :value.',
        'string'  => 'El texto debe ser mayor o igual de :value caracteres.',
    ],
    'image'                => 'Esta debe ser una imagen.',
    'in'                   => 'El valor seleccionado es inválido.',
    'in_array'             => 'Este valor no existe en :other.',
    'integer'              => 'Esto debe ser un entero.',
    'ip'                   => 'Debe ser una dirección IP válida.',
    'ipv4'                 => 'Debe ser una dirección IPv4 válida.',
    'ipv6'                 => 'Debe ser una dirección IPv6 válida.',
    'json'                 => 'Debe ser un texto válido en JSON.',
    'lt'                   => [
        'array'   => 'El contenido debe tener menor de :value elementos.',
        'file'    => 'El tamaño del archivo debe ser menor a :value kilobytes.',
        'numeric' => 'El valor debe ser menor que :value.',
        'string'  => 'El texto debe ser menor de :value caracteres.',
    ],
    'lte'                  => [
        'array'   => 'El contenido no debe tener más de :value elementos.',
        'file'    => 'El tamaño del archivo debe ser menor o igual que :value kilobytes.',
        'numeric' => 'El valor debe ser menor o igual que :value.',
        'string'  => 'El texto debe ser menor o igual de :value caracteres.',
    ],
    'max'                  => [
        'array'   => 'El contenido no debe tener más de :max elementos.',
        'file'    => 'El tamaño del archivo no debe ser mayor a :max kilobytes.',
        'numeric' => 'El valor no debe ser mayor de :max.',
        'string'  => 'El texto no debe ser mayor a :max caracteres.',
    ],
    'mimes'                => 'Debe ser un archivo de tipo: :values.',
    'mimetypes'            => 'Debe ser un archivo de tipo: :values.',
    'min'                  => [
        'array'   => 'El contenido debe tener al menos :min elementos.',
        'file'    => 'El tamaño del archivo debe ser al menos de :min kilobytes.',
        'numeric' => 'El valor debe ser al menos de :min.',
        'string'  => 'El texto debe ser al menos de :min caracteres.',
    ],
    'multiple_of'          => 'Este valor debe ser múltiplo de :value',
    'not_in'               => 'El valor seleccionado es inválido.',
    'not_regex'            => 'Este formato es inválido.',
    'numeric'              => 'Debe ser un número.',
    'password'             => 'La contraseña es incorrecta.',
    'present'              => 'Este campo debe estar presente.',
    'prohibited'           => 'Este campo está prohibido',
    'prohibited_if'        => 'Este campo está prohibido cuando :other es :value.',
    'prohibited_unless'    => 'Este campo está prohibido a menos que :other sea :values.',
    'prohibits'            => 'Este campo prohibe que :other esté presente.',
    'regex'                => 'Este formato es inválido.',
    'relatable'            => 'Este campo no se puede asociar con este recurso.',
    'required'             => 'Este campo :attribute es requerido.',
    'required_if'          => 'Este campo es requerido cuando :other es :value.',
    'required_unless'      => 'Este campo es requerido a menos que :other esté en :values.',
    'required_with'        => 'Este campo es requerido cuando :values está presente.',
    'required_with_all'    => 'Este campo es requerido cuando :values están presentes.',
    'required_without'     => 'Este campo es requerido cuando :values no está presente.',
    'required_without_all' => 'Este campo es requerido cuando ninguno de :values están presentes.',
    'same'                 => 'El valor de este campo debe ser igual a :other.',
    'size'                 => [
        'array'   => 'El contenido debe tener :size elementos.',
        'file'    => 'El tamaño del archivo debe ser de :size kilobytes.',
        'numeric' => 'El valor debe ser :size.',
        'string'  => 'El texto debe ser de :size caracteres.',
    ],
    'starts_with'          => 'Debe comenzar con alguno de los siguientes valores: :values.',
    'string'               => 'Debe ser un texto.',
    'timezone'             => 'Debe ser de una zona horaria válida.',
    'unique'               => 'Este campo ya ha sido tomado.',
    'uploaded'             => 'Falló al subir.',
    'url'                  => 'Debe ser una URL válida.',
    'uuid'                 => 'Debe ser un UUID válido.',
    'attributes'           => [
        'address'               => 'dirección',
        'age'                   => 'edad',
        'body'                  => 'contenido',
        'city'                  => 'ciudad',
        'content'               => 'contenido',
        'country'               => 'país',
        'date'                  => 'fecha',
        'day'                   => 'día',
        'description'           => 'descripción',
        'email'                 => 'correo electrónico',
        'excerpt'               => 'extracto',
        'first_name'            => 'nombre',
        'gender'                => 'género',
        'hour'                  => 'hora',
        'last_name'             => 'apellido',
        'message'               => 'mensaje',
        'minute'                => 'minuto',
        'mobile'                => 'móvil',
        'month'                 => 'mes',
        'name'                  => 'nombre',
        'password'              => 'contraseña',
        'password_confirmation' => 'confirmación de la contraseña',
        'phone'                 => 'teléfono',
        'photo'                 => 'foto',
        'price'                 => 'precio',
        'role'                  => 'rol',
        'second'                => 'segundo',
        'sex'                   => 'sexo',
        'subject'               => 'asunto',
        'terms'                 => 'términos',
        'time'                  => 'hora',
        'title'                 => 'título',
        'username'              => 'usuario',
        'year'                  => 'año',
    ],
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
