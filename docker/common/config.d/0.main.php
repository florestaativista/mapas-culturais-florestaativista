<?php 

return [
    'module.main-footer' => env('MODULE_MAIN_FOTTER_LOGOS_ENABLE', false),
    'app.siteName' => 'Rede Floresta Ativista',
    'app.siteDescription' => 'A Floresta Ativista é uma plataforma que reúne um ecossistema ativista de coletivos, redes, iniciativas e pessoas com vontade de construir e estar em comunidades',
    
    // Define o tema ativo no site principal. Deve ser informado o namespace do tema e neste deve existir uma classe Theme.
    'themes.active' => 'FlorestaAtivista',

    // Ids dos selos verificadores. Para utilizar múltiplos selos informe os ids separados por vírgula.
    'app.verifiedSealsIds' => '1', 

    'registration.prefix' => 'FA-'
];