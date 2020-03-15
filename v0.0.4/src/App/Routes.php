<?php declare(strict_types=1);

$app->get('/', 'App\Controller\Base\BaseController:getHelp');
$app->get('/status', 'App\Controller\Base\BaseController:getStatus');

$app->get("/team", "App\Controller\Team\GetAll");
$app->get("/team/[{id}]", "App\Controller\Team\GetOne");
$app->post("/team", "App\Controller\Team\Create");
$app->put("/team/[{id}]", "App\Controller\Team\Update");
$app->delete("/team/[{id}]", "App\Controller\Team\Delete");

$app->get("/player", "App\Controller\Player\GetAll");
$app->get("/player/[{id}]", "App\Controller\Player\GetOne");
$app->post("/player", "App\Controller\Player\Create");
$app->put("/player/[{id}]", "App\Controller\Player\Update");
$app->delete("/player/[{id}]", "App\Controller\Player\Delete");
