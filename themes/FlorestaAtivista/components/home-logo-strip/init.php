<?php

use MapasCulturais\ApiQuery;
use MapasCulturais\Entities\Agent;

// Array de selos desejados
$seal_ids = $app->config['home-logo-strip.verifiedSealsIds'];

$params = [
    "@select" => "id,name,files,singleUrl,site",
    "@seals" => $seal_ids,
];

$agents = new ApiQuery(Agent::class, $params);
$results = $agents->getFindResult();

// Atribuir os resultados filtrados ao objeto JavaScript
$this->jsObject['config']['homeLogoStrip'] = [
    "agentList" => $results,
    "homeLogoStripActive" => $seal_ids ? true : false,
];
