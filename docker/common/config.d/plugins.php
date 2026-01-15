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
        // 'MultipleLocalAuth' => [ 'namespace' => 'MultipleLocalAuth' ],
        'SamplePlugin' => ['namespace' => 'SamplePlugin'],
        'SpamDetector',
        'PluginSOM',
        //'LocationPatch'
        'Zammad' => [
            'namespace' => 'Zammad',
            'config' => [
                'enabled' => true,
                'url' => 'https://suporte.florestaativista.org/assets/chat/chat-no-jquery.min.js',    
                'background' => '#F66968',
                'title' => 'Duvidas? Fale conosco',
                'chatId' => 2,
            ]
        ],
    ]
];