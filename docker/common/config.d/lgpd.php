<?php 

return [
    'module.LGPD' => [
        'termsOfUsage'=>[
            'title'=> 'Termos e condições de uso', 
            'text'=> file_get_contents(__DIR__ . '/lgpd-terms/terms-of-usage.html'),
            'buttonText' => 'Aceito os termos e condições de uso'

        ],
        'privacyPolicy' => [
            'title'=>  'Política de privacidade',
            'text'=> file_get_contents(__DIR__ . '/lgpd-terms/privacy-policy.html'),
            'buttonText' => 'Aceito a política de privacidade'
        ],
        'imageOfUsage' => [
            'title'=>  'Autorização de uso de imagem',
            'text'=> file_get_contents(__DIR__ . '/lgpd-terms/images-use.html'),
            'buttonText' => 'Autorizo o uso de imagem'
        ],
    ]
];