<?php

declare(strict_types=1);

$app->get('/', 'App\Controller\Home:getHelp');
$app->get('/status', 'App\Controller\Home:getStatus');

$app->get("/team", "App\Controller\Team\GetAll");
$app->post("/team", "App\Controller\Team\Create");
$app->get("/team/{id}", "App\Controller\Team\GetOne");
$app->put("/team/{id}", "App\Controller\Team\Update");
$app->delete("/team/{id}", "App\Controller\Team\Delete");

$app->get("/player", "App\Controller\Player\GetAll");
$app->post("/player", "App\Controller\Player\Create");
$app->get("/player/{id}", "App\Controller\Player\GetOne");
$app->put("/player/{id}", "App\Controller\Player\Update");
$app->delete("/player/{id}", "App\Controller\Player\Delete");
