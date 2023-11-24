<?php
$routes = $config['routes'];

$new_routes = [
    'ninjaesporteclube' => ['agent', 22]
];
foreach($new_routes as $route => $target) {
    $routes['shortcuts'][$route] = [$target[0], 'single', [$target[1]]];
}

return ['routes' => $routes];