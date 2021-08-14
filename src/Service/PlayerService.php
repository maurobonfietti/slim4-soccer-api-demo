<?php

declare(strict_types=1);

namespace App\Service;

use App\Exception\PlayerException;
use App\Repository\PlayerRepository;

final class PlayerService
{
    private PlayerRepository $playerRepository;

    public function __construct(PlayerRepository $playerRepository)
    {
        $this->playerRepository = $playerRepository;
    }

    public function checkAndGet(int $playerId): object
    {
        return $this->playerRepository->checkAndGet($playerId);
    }

    public function getAll(): array
    {
        return $this->playerRepository->getAll();
    }

    public function getOne(int $playerId): object
    {
        return $this->checkAndGet($playerId);
    }

    public function create(array $input): object
    {
        $player = json_decode((string) json_encode($input), false);

        return $this->playerRepository->create($player);
    }

    public function update(array $input, int $playerId): object
    {
        $player = $this->checkAndGet($playerId);
        $data = json_decode((string) json_encode($input), false);

        return $this->playerRepository->update($player, $data);
    }

    public function delete(int $playerId): void
    {
        $this->checkAndGet($playerId);
        $this->playerRepository->delete($playerId);
    }
}
