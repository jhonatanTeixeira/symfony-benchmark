<?php

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'params' => [
                    'url' => 'mysql://api_platform:api_platform@database/api_platform',
                ],
            ],
        ],
        'driver' => [
            'orm_default' => [
                'class' => \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain::class,
                'drivers' => [
                    'App\Entity' => 'app_entity',
                ],
            ],
            'app_entity' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => 'src/App/Entity',
            ],
        ],
    ],
];
