<?php

return [
    'plugins' => [
        'Analytics',
        'MapasBlame' => [
            'namespace' => 'MapasBlame',
            'config' => [
                'request.logData.PATCH' => function ($data) {
                    return $data;
                },
            ]
        ],
        'AdminLoginAsUser' => ['namespace' => 'AdminLoginAsUser'],
        'MultipleLocalAuth' => [ 'namespace' => 'MultipleLocalAuth' ],
        'SamplePlugin' => ['namespace' => 'SamplePlugin'],
    ]
];