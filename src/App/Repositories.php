<?php

declare(strict_types=1);

$container["player_repository"] = static function ($container): App\Repository\PlayerRepository {
    return new App\Repository\PlayerRepository($container["db"]);
};

$container["team_repository"] = static function ($container): App\Repository\TeamRepository {
    return new App\Repository\TeamRepository($container["db"]);
};
