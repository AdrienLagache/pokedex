<?php
namespace Pokedex;

use AltoRouter;

require_once __DIR__.'/../vendor/autoload.php';

$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);

$router->map(
    'GET',
    '/',
    [
        'method' => 'home',
        'controller' => 'MainController'
    ],
    'home-page'
);

$router->map(
    'GET',
    '/details/[i:id]',
    [
        'method' => 'details',
        'controller' => 'MainController'
    ],
    'details'
);

$router->map(
    'GET',
    '/types',
    [
        'method' => 'types',
        'controller' => 'MainController'
    ]
);

$router->map(
    'GET',
    '/types/[i:id]',
    [
        'method' => 'typeFilter',
        'controller' => 'MainController'
    ]
);

$match = $router->match();

if ($match) {

    $controllerToUse = "Pokedex\\Controllers\\".$match['target']['controller'];
    $methodToUse = $match['target']['method'];

    $controller = new $controllerToUse;
    $controller->$methodToUse($match['params']);

} else {

    exit('404 page not found');
}
