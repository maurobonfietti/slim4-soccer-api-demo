<?php

declare(strict_types=1);

namespace App\Controller\Player;

use App\Service\PlayerService;
use Pimple\Psr11\Container;

abstract class Base
{
    protected Container $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    protected function getPlayerService(): PlayerService
    {
        return $this->container->get('player_service');
    }
}
