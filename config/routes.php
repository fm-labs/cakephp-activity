<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

//Router::plugin(
//    'Activity',
//    ['path' => '/activity'],
//    function (RouteBuilder $routes) {
//        $routes->fallbacks(DashedRoute::class);
//    }
//);

Router::scope(
    '/admin/activity',
    ['prefix' => 'admin', 'plugin' => 'Activity'],
    function (RouteBuilder $routes) {
        $routes->connect('/', ['controller' => 'Activities', 'action' => 'index']);
        $routes->fallbacks(DashedRoute::class);
    }
);
