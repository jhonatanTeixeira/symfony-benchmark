<?php

return [
    'dependencies' => [
        'invokables' => [
            Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\FastRouteRouter::class,
            //App\Action\FoosAction::class => App\Action\FoosAction::class,
        ],
        'factories' => [
            App\Action\HomePageAction::class => App\Action\HomePageFactory::class,
            App\Action\FoosAction::class => \App\Action\FoosActionFactory::class,
        ],
    ],

    'routes' => [
        [
            'name' => 'home',
            'path' => '/',
            'middleware' => App\Action\HomePageAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'foos',
            'path' => '/foos.json',
            'middleware' => App\Action\FoosAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'api.ping',
            'path' => '/api/ping',
            'middleware' => App\Action\PingAction::class,
            'allowed_methods' => ['GET'],
        ],
    ],
];
