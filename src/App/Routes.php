<?php

declare(strict_types=1);

$app->get('/', 'App\Controller\Home:getHelp');
$app->get('/status', 'App\Controller\Home:getStatus');

$app->get('/team', App\Controller\Team\GetAll::class);
$app->post('/team', App\Controller\Team\Create::class);
$app->get('/team/{id}', App\Controller\Team\GetOne::class);
$app->put('/team/{id}', App\Controller\Team\Update::class);
$app->delete('/team/{id}', App\Controller\Team\Delete::class);

$app->get('/player', App\Controller\Player\GetAll::class);
$app->post('/player', App\Controller\Player\Create::class);
$app->get('/player/{id}', App\Controller\Player\GetOne::class);
$app->put('/player/{id}', App\Controller\Player\Update::class);
$app->delete('/player/{id}', App\Controller\Player\Delete::class);
