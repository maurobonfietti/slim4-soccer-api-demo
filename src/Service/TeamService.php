<?php

declare(strict_types=1);

namespace App\Service;

use App\Exception\TeamException;
use App\Repository\TeamRepository;

final class TeamService extends BaseService
{
    protected TeamRepository $teamRepository;

    public function __construct(TeamRepository $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    protected function checkAndGet(int $teamId)
    {
        return $this->teamRepository->checkAndGet($teamId);
    }

    public function getAll(): array
    {
        return $this->teamRepository->getAll();
    }

    public function getOne(int $teamId)
    {
        return $this->checkAndGet($teamId);
    }

    public function create(array $input)
    {
        $team = json_decode(json_encode($input), false);

        return $this->teamRepository->create($team);
    }

    public function update(array $input, int $teamId)
    {
        $team = $this->checkAndGet($teamId);
        $data = json_decode(json_encode($input), false);

        return $this->teamRepository->update($team, $data);
    }

    public function delete(int $teamId): void
    {
        $this->checkAndGet($teamId);
        $this->teamRepository->delete($teamId);
    }
}
