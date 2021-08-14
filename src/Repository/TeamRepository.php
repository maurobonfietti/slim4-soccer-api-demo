<?php

declare(strict_types=1);

namespace App\Repository;

use App\Exception\TeamException;

final class TeamRepository
{
    private \PDO $database;

    public function __construct(\PDO $database)
    {
        $this->database = $database;
    }

    public function getDb(): \PDO
    {
        return $this->database;
    }

    public function checkAndGet(int $teamId): object
    {
        $query = 'SELECT * FROM `team` WHERE `id` = :id';
        $statement = $this->getDb()->prepare($query);
        $statement->bindParam('id', $teamId);
        $statement->execute();
        $team = $statement->fetchObject();
        if (! $team) {
            throw new TeamException('Team not found.', 404);
        }

        return $team;
    }

    public function getAll(): array
    {
        $query = 'SELECT * FROM `team` ORDER BY `id`';
        $statement = $this->getDb()->prepare($query);
        $statement->execute();

        return (array) $statement->fetchAll();
    }

    public function create(object $team): object
    {
        $query = 'INSERT INTO `team` (`id`, `name`, `stadium_name`, `capacity`) VALUES (:id, :name, :stadium_name, :capacity)';
        $statement = $this->getDb()->prepare($query);
        $statement->bindParam('id', $team->id);
        $statement->bindParam('name', $team->name);
        $statement->bindParam('stadium_name', $team->stadium_name);
        $statement->bindParam('capacity', $team->capacity);

        $statement->execute();

        return $this->checkAndGet((int) $this->getDb()->lastInsertId());
    }

    public function update(object $team, object $data): object
    {
        if (isset($data->name)) {
            $team->name = $data->name;
        }
        if (isset($data->stadium_name)) {
            $team->stadium_name = $data->stadium_name;
        }
        if (isset($data->capacity)) {
            $team->capacity = $data->capacity;
        }

        $query = 'UPDATE `team` SET `name` = :name, `stadium_name` = :stadium_name, `capacity` = :capacity WHERE `id` = :id';
        $statement = $this->getDb()->prepare($query);
        $statement->bindParam('id', $team->id);
        $statement->bindParam('name', $team->name);
        $statement->bindParam('stadium_name', $team->stadium_name);
        $statement->bindParam('capacity', $team->capacity);

        $statement->execute();

        return $this->checkAndGet((int) $team->id);
    }

    public function delete(int $teamId): void
    {
        $query = 'DELETE FROM `team` WHERE `id` = :id';
        $statement = $this->getDb()->prepare($query);
        $statement->bindParam('id', $teamId);
        $statement->execute();
    }
}
