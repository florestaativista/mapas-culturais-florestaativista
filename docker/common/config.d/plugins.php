<?php

return [
    'plugins' => [
        'Analytics',
        'SettingsFa',
        'MapasBlame' => [
            'namespace' => 'MapasBlame',
            'config' => [
                'request.logData.PATCH' => function ($data) {
                    return $data;
                },
            ]
        ],
        'AdminLoginAsUser' => ['namespace' => 'AdminLoginAsUser'],
        'SamplePlugin' => ['namespace' => 'SamplePlugin'],
        'SpamDetector',
        'PluginSOM',
        //'LocationPatch'
    ]
];