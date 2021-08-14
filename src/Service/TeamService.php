<?php

declare(strict_types=1);

namespace App\Service;

use App\Exception\TeamException;
use App\Repository\TeamRepository;

final class TeamService
{
    private TeamRepository $teamRepository;

    public function __construct(TeamRepository $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    public function checkAndGet(int $teamId): object
    {
        return $this->teamRepository->checkAndGet($teamId);
    }

    public function getAll(): array
    {
        return $this->teamRepository->getAll();
    }

    public function getOne(int $teamId): object
    {
        return $this->checkAndGet($teamId);
    }

    public function create(array $input): object
    {
        $team = json_decode((string) json_encode($input), false);

        return $this->teamRepository->create($team);
    }

    public function update(array $input, int $teamId): object
    {
        $team = $this->checkAndGet($teamId);
        $data = json_decode((string) json_encode($input), false);

        return $this->teamRepository->update($team, $data);
    }

    public function delete(int $teamId): void
    {
        $this->checkAndGet($teamId);
        $this->teamRepository->delete($teamId);
    }
}
