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

    'accepted' => 'O :attribute deve ser aceito.',
    'accepted_if' => 'O :attribute deve ser aceito quando :other for :value.',
    'active_url' => 'O :attribute não é uma URL válida.',
    'after' => 'O :attribute deve ser uma data posterior a :date.',
    'after_or_equal' => 'O :attribute deve ser uma data posterior ou igual a :date.',
    'alpha' => 'O :attribute deve conter somente letras.',
    'alpha_dash' => 'O :attribute deve conter somente letras, numeros, traços e sublinhados.',
    'alpha_num' => 'O :attribute deve conter somente letras e numeros.',
    'array' => 'O :attribute deve ser um array.',
    'before' => 'O :attribute deve ser uma data anterior a :date.',
    'before_or_equal' => 'O :attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => 'O :attribute deve ser entre :min e :max.',
        'file' => 'O :attribute deve ser entre :min e :max kilobytes.',
        'string' => 'O :attribute deve ser entre :min e :max caracteres.',
        'array' => 'O :attribute deve ter entre :min e :max itens.',
    ],
    'boolean' => 'O campo :attribute deve ser verdadeiro or falso.',
    'confirmed' => 'A confirmação do :attribute não mete.',
    'current_password' => 'A senha está incorreta.',
    'date' => 'O :attribute não é uma data válida.',
    'date_equals' => 'O :attribute deve ser uma data igual a :date.',
    'date_format' => 'O :attribute não corresponde com o formato :format.',
    'declined' => 'O :attribute deve ser recusado.',
    'declined_if' => 'O :attribute deve ser recusado quando :other for :value.',
    'different' => 'O :attribute e :other devem ser diferentes.',
    'digits' => 'O :attribute devem ter digitos :digits.',
    'digits_between' => 'O :attribute deve ter entre :min e :max digitos.',
    'dimensions' => 'O :attribute tem dimensões de imagem inválidas.',
    'distinct' => 'O campo :attribute tem um valor duplicado.',
    'email' => 'O :attribute deve ser um endereço de email válido.',
    'ends_with' => 'O :attribute deve terminar com um dos seguintes: :values.',
    'enum' => 'O :attribute selecionado é inválido.',
    'exists' => 'O :attribute selecionado é inválido.',
    'file' => 'O :attribute deve ser um arquivo.',
    'filled' => 'O campo :attribute deve conter um valor.',
    'gt' => [
        'numeric' => 'O :attribute deve ser maior que :value.',
        'file' => 'O :attribute deve ser maior que :value kilobytes.',
        'string' => 'O :attribute deve ser maior que :value caracteres.',
        'array' => 'O :attribute deve conter mais que :value itens.',
    ],
    'gte' => [
        'numeric' => 'O :attribute deve ser maior ou igual a :value.',
        'file' => 'O :attribute deve ser maior ou igual a :value kilobytes.',
        'string' => 'O :attribute deve ser maior ou igual a :value caracteres.',
        'array' => 'O :attribute deve conter :value itens ou mais.',
    ],
    'image' => 'O :attribute deve ser uma imagem.',
    'in' => 'O :attribute selecionado é inválido.',
    'in_array' => 'O campo :attribute não existe em :other.',
    'integer' => 'O :attribute deve ser um número inteiro.',
    'ip' => 'O :attribute deve ser um endereço IP válido.',
    'ipv4' => 'O :attribute deve ser um endereço IPv4 válido.',
    'ipv6' => 'O :attribute deve ser um endereço IPv6 válido.',
    'json' => 'O :attribute deve ser um texto JSON válido.',
    'lt' => [
        'numeric' => 'O :attribute deve ser less than :value.',
        'file' => 'O :attribute deve ser less than :value kilobytes.',
        'string' => 'O :attribute deve ser less than :value caracteres.',
        'array' => 'O :attribute deve conter less than :value itens.',
    ],
    'lte' => [
        'numeric' => 'O :attribute deve ser less than ou igual a :value.',
        'file' => 'O :attribute deve ser less than ou igual a :value kilobytes.',
        'string' => 'O :attribute deve ser less than ou igual a :value caracteres.',
        'array' => 'O :attribute must not have more than :value itens.',
    ],
    'mac_address' => 'O :attribute deve ser a valid MAC address.',
    'max' => [
        'numeric' => 'O :attribute não deve ser maior que :max.',
        'file' => 'O :attribute não deve ser maior que :max kilobytes.',
        'string' => 'O :attribute não deve ser maior que :max caracteres.',
        'array' => 'O :attribute must not have more than :max itens.',
    ],
    'mimes' => 'O :attribute deve ser a file of type: :values.',
    'mimetypes' => 'O :attribute deve ser a file of type: :values.',
    'min' => [
        'numeric' => 'O :attribute deve ser at least :min.',
        'file' => 'O :attribute deve ser at least :min kilobytes.',
        'string' => 'O :attribute deve ser at least :min caracteres.',
        'array' => 'O :attribute deve conter at least :min itens.',
    ],
    'multiple_of' => 'O :attribute deve ser um multiplo de :value.',
    'not_in' => 'O :attribute selecionado é inválido.',
    'not_regex' => 'O formato do :attribute é inválido.',
    'numeric' => 'O :attribute deve ser um número.',
    'password' => 'A senha está incorreta.',
    'present' => 'O campo :attribute deve estar presente.',
    'prohibited' => 'O campo :attribute é proibido.',
    'prohibited_if' => 'O campo :attribute é proibido quando :other is :value.',
    'prohibited_unless' => 'O campo :attribute é proibido ao menos :other esteja em :values.',
    'prohibits' => 'O campo :attribute proibe :other de ser presente',
    'regex' => 'O formato do :attribute é inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_array_keys' => 'The campo :attribute must contain entries for: :values.',
    'required_if' => 'The campo :attribute é obrigatório quando :other is :value.',
    'required_unless' => 'The campo :attribute é obrigatório unless :other esteja em :values.',
    'required_with' => 'The campo :attribute é obrigatório quando :values is present.',
    'required_with_all' => 'The campo :attribute é obrigatório quando :values are present.',
    'required_without' => 'The campo :attribute é obrigatório quando :values is not present.',
    'required_without_all' => 'The campo :attribute é obrigatório quando none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute deve ser :size.',
        'file' => 'The :attribute deve ser :size kilobytes.',
        'string' => 'The :attribute deve ser :size caracteres.',
        'array' => 'The :attribute must contain :size itens.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute deve ser a string.',
    'timezone' => 'The :attribute deve ser a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute deve ser a valid URL.',
    'uuid' => 'The :attribute deve ser a valid UUID.',

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
