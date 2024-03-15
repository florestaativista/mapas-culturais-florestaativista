<?php
$routes = $config['routes'];

$new_routes = [
    'ninjaesporteclube' => ['agent', 22],
    'faccion' => ['agent',83],
    'gurizada' => ['agent',81],
    'som' => ['agent',78],
    'estudantesninja' => ['agent',77],
    'culturadered' => ['agent',76],
    'midianinja' => ['agent',74],
    'casaninjaamazonia' => ['agent',60],
    'campanhademulher' => ['agent',55],
    'minasninja' => ['agent',54],
    'causa' => ['agent',53],
    'ninjafoto' => ['agent',52],
    'planetafoda' => ['agent',51],
    'cineninja' => ['agent',49],
    'emergentes' => ['agent',47],
    'designativista' => ['agent',46],
    'climax' => ['agent',29],
    'zonadepropulsao' => ['agent',26],
    'poderespretos' => ['agent',27],
    'xepaativismo' => ['agent',25],
    'planetaella' => ['agent',23],
    'navecoletiva' => ['agent',21],
    'florestaativista' => ['agent',12],
    'oscars2024' => ['opportunity',11],
    'metaversoverao' => ['opportunity',21],
    '8M2024' => ['opportunity',23],
    'ATL20' => ['opportunity',25],
];
foreach($new_routes as $route => $target) {
    $routes['shortcuts'][$route] = [$target[0], 'single', [$target[1]]];
}

return ['routes' => $routes];
