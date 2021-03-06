<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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

    'accepted'   => ':attribute muss akzeptiert werden.',
    'active_url' => ':attribute ist keine gültige Internet-Adresse.',
    'after'      => ':attribute muss ein Datum nach dem :date sein.',
    'alpha'      => ':attribute darf nur aus Buchstaben bestehen.',
    'alpha_dash' => ':attribute darf nur aus Buchstaben, Zahlen, Binde- und Unterstrichen bestehen. Umlaute (ä, ö, ü) und Eszett (ß) sind nicht erlaubt.',
    'alpha_num'  => ':attribute darf nur aus Buchstaben, Zahlen, Binde- und Unterstrichen bestehen. Umlaute (ä, ö, ü) und Eszett (ß) sind nicht erlaubt.',
    'array'      => ':attribute muss ein Array sein.',
    'before'     => ':attribute muss ein Datum vor dem :date sein.',
    'between'    => [
        'numeric' => ':attribute muss ein Datum vor dem :date sein.',
        'file'    => 'The :attribute must be between :min and :max.',
        'string'  => 'The :attribute must be between :min and :max kilobytes.',
        'array'   => ':attribute muss zwischen :min & :max Elemente haben.',
    ],
    'boolean'        => ':attribute muss zwischen :min & :max Elemente haben.',
    'confirmed'      => 'The :attribute field must be true or false.',
    'date'           => 'The :attribute confirmation does not match.',
    'date_format'    => 'The :attribute is not a valid date.',
    'different'      => 'The :attribute does not match the format :format.',
    'digits'         => 'The :attribute and :other must be different.',
    'digits_between' => 'The :attribute must be :digits digits.',
    'email'          => 'The :attribute must be between :min and :max digits.',
    'exists'         => 'The :attribute must be a valid email address.',
    'distinct'       => 'Pole :attribute zawiera podwójną wartość.',
    'filled'         => 'Format atrybutu ":attribute" jest nieprawidłowy.',
    'image'          => ':attribute muss ein Bild sein.',
    'in'             => ':attribute muss ein Bild sein.',
    'in_array'       => 'Pole :attribute nie istnieje w :other.',
    'integer'        => 'The selected :attribute is invalid.',
    'ip'             => 'The :attribute must be an integer.',
    'json'           => ':attribute musi być prawidłowym węzłem JSON.',
    'max'            => [
        'numeric' => 'The :attribute must be a valid IP address.',
        'file'    => 'The :attribute may not be greater than :max.',
        'string'  => 'The :attribute may not be greater than :max kilobytes.',
        'array'   => ':attribute darf nicht mehr als :max Elemente haben.',
    ],
    'mimes' => ':attribute darf nicht mehr als :max Elemente haben.',
    'min'   => [
        'numeric' => 'The :attribute must be a file of type: :values.',
        'file'    => ':attribute muss mindestens :min Kilobytes groß sein.',
        'string'  => ':attribute muss mindestens :min Kilobytes groß sein.',
        'array'   => 'The :attribute must be at least :min characters.',
    ],
    'not_in'               => 'The :attribute must have at least :min items.',
    'numeric'              => 'The selected :attribute is invalid.',
    'present'              => 'Pole :attribute musi być obecne.',
    'regex'                => 'The :attribute must be a number.',
    'required'             => 'Format atrybutu ":attribute" jest nieprawidłowy.',
    'required_if'          => 'The :attribute field is required.',
    'required_unless'      => 'Pole :attribute jest wymagane, chyba że :other jest w :values.',
    'required_with'        => 'The :attribute field is required when :other is :value.',
    'required_with_all'    => 'Pole :attribute jest wymagane kiedy obecne jest :values.',
    'required_without'     => 'Pole :attribute jest wymagane kiedy obecne jest :values.',
    'required_without_all' => 'The :attribute field is required when :values is not present.',
    'same'                 => 'The :attribute field is required when none of :values are present.',
    'size'                 => [
        'numeric' => 'The :attribute and :other must match.',
        'file'    => ':attribute muss :size Kilobytes groß sein.',
        'string'  => ':attribute muss :size Zeichen lang sein.',
        'array'   => ':attribute muss :size Zeichen lang sein.',
    ],
    'string'   => 'The :attribute must contain :size items.',
    'timezone' => ':attribute muss eine gültige Zeitzone sein.',
    'unique'   => ':attribute ist schon vergeben.',
    'url'      => 'Format atrybutu ":attribute" jest nieprawidłowy.',

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
            'rule-name' => 'Individuelle Nachricht',
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
