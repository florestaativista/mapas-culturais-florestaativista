<?php 

return [
    'module.main-footer' => env('MODULE_MAIN_FOTTER_LOGOS_ENABLE', false),
    'app.siteName' => 'Rede Floresta Ativista',
    'app.siteDescription' => 'A Floresta Ativista é uma plataforma que reúne um ecossistema ativista de coletivos, redes, iniciativas e pessoas com vontade de construir e estar em comunidades',
    
    // Define o tema ativo no site principal. Deve ser informado o namespace do tema e neste deve existir uma classe Theme.
    'themes.active' => 'FlorestaAtivista',

    // Ids dos selos verificadores. Para utilizar múltiplos selos informe os ids separados por vírgula.
    'app.verifiedSealsIds' => '1', 

    'registration.prefix' => 'FA-',

    // Define selo que ira destacar os agentes parceiros.
    'home-logo-strip.verifiedSealsIds' => env('HOME_LOGO_STRIP_VERIFIELD_SEALS_ID', ''),

    // Define link para o menu de notícias no site
    'app.menu.noticies.link' => env('MENU_NOTICIES_LINK','https://florestaativista.org/'),
];