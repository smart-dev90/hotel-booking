<?php
return [

    'accepted' => 'O :attribute deve ser aceito.',
    'active_url' => 'O :attribute não é uma URL válida.',
    'after' => 'O :attribute deve ser uma data após :date.',
    'alpha' => 'O :attribute deve ter apenas letras.',
    'alpha_dash' => 'O :attribute deve ter apenas letras, números e traços.',
    'alpha_num' => 'O :attribute deve ter apenas letras e números.',
    'array' => 'O :attribute deve ser um array.',
    'before' => 'O :attribute deve ser uma data antes de :date.',
    'between' => [
        'numeric' => 'O :attribute deve estar entre :min e :max.',
        'file' => 'O :attribute deve estar entre :min e :max kilobytes.',
        'string' => 'O :attribute deve estar entre :min e :max caracteres.',
        'array' => 'O :attribute deve ter entre :min e :max itens.',
    ],
    'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'A confirmação do campo :attribute não corresponde.',
    'date' => 'A :attribute não é uma data válida.',
    'date_format' => 'O :attribute não corresponde ao formato :format.',
    'different' => 'O :attribute e :other devem ser diferentes.',
    'digits' => 'O :attribute deve ter :digits dígitos.',
    'digits_between' => 'O :attribute deve ter entre :min e :max dígitos.',
    'dimensions' => 'O :attribute possui dimensões inválidas de imagem.',
    'distinct' => 'O campo :attribute possui um valor duplicado.',
    'email' => 'O :attribute deve ser um endereço de e-mail válido.',
    'exists' => 'O :attribute selecionado é inválido.',
    'file' => 'O :attribute deve ser um arquivo.',
    'filled' => 'O campo :attribute é obrigatório.',
    'image' => 'O :attribute deve ser uma imagem.',
    'in' => 'O :attribute selecionado é inválido.',
    'in_array' => 'O campo :attribute não existe em :other.',
    'integer' => 'O :attribute deve ser um inteiro.',
    'ip' => 'O :attribute deve ser um endereço de IP válido.',
    'json' => 'O :attribute deve ser uma string JSON válida.',
    'max' => [
        'numeric' => 'O :attribute não deve ser maior que :max.',
        'file' => 'O :attribute não deve ser maior que :max kilobytes.',
        'string' => 'O :attribute não deve ser maior que :max caracteres.',
        'array' => 'O :attribute não deve ter mais que :max itens.',
    ],
    'mimes' => 'O :attribute deve ser um arquivo do tipo :values.',
    'min' => [
        'numeric' => 'O :attribute deve ser no mínimo :min.',
        'file' => 'O :attribute deve ter no mínimo :min kilobytes.',
        'string' => 'O :attribute deve ter no mínimo :min caracteres.',
        'array' => 'O :attribute deve ter no mínimo :min itens.',
    ],
    'not_in' => 'O :attribute selecionado é inválido.',
    'numeric' => 'O :attribute deve ser um número.',
    'present' => 'O campo :attribute deve estar presente.',
    'regex' => 'O formato :attribute é inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_if' => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless' => 'O campo :attribute é obrigatório a não ser que :other está em :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum de :values está presente.',
    'same' => 'O :attribute e :other devem corresponder.',
    'size' => [
        'numeric' => 'O :attribute deve ser :size.',
        'file' => 'O :attribute deve ter :size kilobytes.',
        'string' => 'O :attribute deve ter :size caracteres.',
        'array' => 'O :attribute deve conter :size itens.',
    ],
    'string' => 'O :attribute deve ser uma string.',
    'timezone' => 'O :attribute deve ser uma zona válida.',
    'unique' => 'O :attribute já foi definido.',
    'url' => 'O formato :attribute é inválido.',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'mensagem-personalizada',
        ],
    ],

];