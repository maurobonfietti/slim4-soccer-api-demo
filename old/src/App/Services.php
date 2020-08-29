<?php

declare(strict_types=1);

$container["player_service"] = static function ($container): App\Service\PlayerService {
    return new App\Service\PlayerService($container["player_repository"]);
};

$container["team_service"] = static function ($container): App\Service\TeamService {
    return new App\Service\TeamService($container["team_repository"]);
};
