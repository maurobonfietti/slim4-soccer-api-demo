<?php

declare(strict_types=1);

namespace App\Service;

use App\Exception\PlayerException;
use App\Repository\PlayerRepository;

final class PlayerService extends BaseService
{
    protected PlayerRepository $playerRepository;

    public function __construct(PlayerRepository $playerRepository)
    {
        $this->playerRepository = $playerRepository;
    }

    protected function checkAndGet(int $playerId)
    {
        return $this->playerRepository->checkAndGet($playerId);
    }

    public function getAll(): array
    {
        return $this->playerRepository->getAll();
    }

    public function getOne(int $playerId)
    {
        return $this->checkAndGet($playerId);
    }

    public function create(array $input)
    {
        $player = json_decode(json_encode($input), false);

        return $this->playerRepository->create($player);
    }

    public function update(array $input, int $playerId)
    {
        $player = $this->checkAndGet($playerId);
        $data = json_decode(json_encode($input), false);

        return $this->playerRepository->update($player, $data);
    }

    public function delete(int $playerId): void
    {
        $this->checkAndGet($playerId);
        $this->playerRepository->delete($playerId);
    }
}
