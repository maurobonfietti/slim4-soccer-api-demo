<?php

declare(strict_types=1);

namespace App\Repository;

use App\Exception\PlayerException;

final class PlayerRepository extends BaseRepository
{
    public function __construct(\PDO $database)
    {
        $this->database = $database;
    }

    public function checkAndGet(int $playerId)
    {
        $query = 'SELECT * FROM `player` WHERE `id` = :id';
        $statement = $this->getDb()->prepare($query);
        $statement->bindParam('id', $playerId);
        $statement->execute();
        $player = $statement->fetchObject();
        if (empty($player)) {
            throw new PlayerException('Player not found.', 404);
        }

        return $player;
    }

    public function getAll(): array
    {
        $query = 'SELECT * FROM `player` ORDER BY `id`';
        $statement = $this->getDb()->prepare($query);
        $statement->execute();

        return $statement->fetchAll();
    }

    public function create(object $player)
    {
        $query = 'INSERT INTO `player` (`id`, `name`) VALUES (:id, :name)';
        $statement = $this->getDb()->prepare($query);
        $statement->bindParam('id', $player->id);
	$statement->bindParam('name', $player->name);
        $statement->execute();

        return $this->checkAndGet((int) $this->getDb()->lastInsertId());
    }

    public function update(object $player, object $data)
    {
        if (isset($data->name)) { $player->name = $data->name; }

        $query = 'UPDATE `player` SET `name` = :name WHERE `id` = :id';
        $statement = $this->getDb()->prepare($query);
        $statement->bindParam('id', $player->id);
	$statement->bindParam('name', $player->name);
        $statement->execute();

        return $this->checkAndGet((int) $player->id);
    }

    public function delete(int $playerId): void
    {
        $query = 'DELETE FROM `player` WHERE `id` = :id';
        $statement = $this->getDb()->prepare($query);
        $statement->bindParam('id', $playerId);
        $statement->execute();
    }
}
