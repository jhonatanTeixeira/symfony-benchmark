<?php

$env = getenv('APP_ENV') ?: 'prod';

switch ($env) {
    default:
    case 'prod':
        $container = require 'config/container.php';
        break;
    case 'test':
        $container = require 'config/container_test.php';
        break;
}

return new \Symfony\Component\Console\Helper\HelperSet([
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper(
        $container->get('doctrine.entity_manager.orm_default')
    ),
]);
