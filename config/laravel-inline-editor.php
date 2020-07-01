<?php

return [
    // Default Editor Options
    //'options' => '{ \'anchor\': { \'targetCheckbox\': true } }',
    'options' => '{ \'anchor\': { \'targetCheckbox\': true }, \'toolbar\': { \'buttons\': [\'bold\', \'italic\', \'underline\'] } }',
    // You can override the default active buttons for example like so:
    //'options' => '{ \'anchor\': { \'targetCheckbox\': true }, \'toolbar\': { \'buttons\': [\'bold\', \'italic\', \'underline\'] } }',

    // Default Validation rules
    'rules' => [
        'default' => [
            'table'         => 'required',
            'source_key'    => 'required',
            'source_value'  => 'required',
            'target_key'    => 'required',
            'target_value'  => 'required',
        ]
    ],

    'paths' => [
        'js' => base_path('/resources/js/components'),
        'sass' => base_path('/resources/sass'),
    ],

];
