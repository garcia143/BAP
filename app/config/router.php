<?php

$router = $di->getRouter(false);

// 404 Not Found
$router->notFound([
    'controller'         => 'Errors',
    'action'             => 'notFound'
]);

// Index Page
$router->addGet('/', [
    'controller'         => 'Pages',
    'action'             => 'index'
]);

$router->handle();
