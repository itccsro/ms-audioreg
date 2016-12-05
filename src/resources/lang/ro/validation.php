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

    'accepted'             => ':attribute trebuie sa fie acceptat.',
    'active_url'           => ':attribute nu este un URL valid.',
    'after'                => ':attribute trebuie sa fie o data dupa :date.',
    'alpha'                => ':attribute trebuie sa contina numai litere.',
    'alpha_dash'           => ':attribute trebuie sa contina numai litere, numere si cratime.',
    'alpha_num'            => ':attribute trebuie sa contina numai litere si numere.',
    'array'                => ':attribute trebuie sa fie o multime.',
    'before'               => ':attribute trebuie sa fie o data inainte de :date.',
    'between'              => [
        'numeric' => ':attribute trebuie sa fie intre :min si :max.',
        'file'    => ':attribute trebuie sa fie intre :min si :max kilobytes.',
        'string'  => ':attribute trebuie sa fie intre :min si :max caractere.',
        'array'   => ':attribute trebuie sa aiba intre :min si :max unitati.',
    ],
    'boolean'              => 'Campul :attribute trebuie sa fie adevarat sau fals.',
    'confirmed'            => 'Confirmarea :attribute nu corespunde.',
    'date'                 => ':attribute nu este o data valida.',
    'date_format'          => 'formatul :attribute nu corespunde :format.',
    'different'            => ':attribute si :other trebuie sa fie diferite.',
    'digits'               => ':attribute trebuie sa fie :digits cifre.',
    'digits_between'       => ':attribute trebuie sa fie intre :min si :max cifre.',
    'dimensions'           => ':attribute are dimensiuni invalide de imagine.',
    'distinct'             => 'Campul :attribute are o valoare dubla.',
    'email'                => ':attribute trebuie sa fie o adresa de e-mail valida.',
    'exists'               => ':attribute selctat nu este valid.',
    'file'                 => ':attribute trebuie sa fie un fisier.',
    'filled'               => ':attribute campul este obligatoriu.',
    'image'                => ':attribute trebuie sa fie o imagine.',
    'in'                   => ':attribute selectat este invalid.',
    'in_array'             => 'Campul :attribute nu exista in :other.',
    'integer'              => ':attribute trebuie sa fie un numar intreg.',
    'ip'                   => ':attribute trebuie sa fie o adresa IP valida.',
    'json'                 => ':attribute trebuie sa fie string JSON valid.',
    'max'                  => [
        'numeric' => ':attribute nu trebuie sa fie mai mare decat :max.',
        'file'    => ':attribute nu trebuie sa fie mai mare decat :max kilobytes.',
        'string'  => ':attribute nu trebuie sa fie mai mare decat :max caractere.',
        'array'   => ':attribute nu trebuie sa aiba mai multe decat :max unitati.',
    ],
    'mimes'                => ':attribute trebuie sa fie un fisier de tipul: :values.',
    'mimetypes'            => ':attribute trebuie sa fie un fisier de tipul: :values.',
    'min'                  => [
        'numeric' => ':attribute trebuie sa fie cel putin :min.',
        'file'    => ':attribute trebuie sa aiba cel putin :min kilobytes.',
        'string'  => ':attribute trebuie sa aiba cel putin :min caractere.',
        'array'   => ':attribute trebuie sa aiba cel putin :min unitati.',
    ],
    'not_in'               => ':attribute selectat este invalid.',
    'numeric'              => ':attribute trebuie sa fie un numar.',
    'present'              => ':attribute campul trebuie sa exista.',
    'regex'                => 'Formatul :attribute este invalid.',
    'required'             => 'Campul :attribute este obligatoriu.',
    'required_if'          => 'Campul :attribute este obligatoriu cand :other este :value.',
    'required_unless'      => 'Campul :attribute este obligatoriu doar daca :other este in :values.',
    'required_with'        => 'Campul :attribute este obligatoriu cand :values exista.',
    'required_with_all'    => 'Campul :attribute este obligatoriu cand :values exista.',
    'required_without'     => 'Campul :attribute este obligatoriu cand :values nu exista.',
    'required_without_all' => 'Campul :attribute este obligatoriu cand niciun :values exista.',
    'same'                 => ':attribute si :other trebuie sa corespunda.',
    'size'                 => [
        'numeric' => ':attribute trebuie sa aiba :size.',
        'file'    => ':attribute trebuie sa fie :size kilobytes.',
        'string'  => ':attribute trebuie sa aiba :size caractere.',
        'array'   => ':attribute trebuie sa contina :size unitati.',
    ],
    'string'               => ':attribute trebuie sa fie un string.',
    'timezone'             => ':attribute trebuie sa fie un fus orar valid.',
    'unique'               => ':attribute este deja luat.',
    'uploaded'             => ':attribute a esuat incarcarea.',
    'url'                  => 'Formatul :attribute este invalid.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
