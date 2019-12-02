<?php declare(strict_types=1);

namespace App\Repository;

use App\Exception\PlayerException;

class PlayerRepository extends BaseRepository
{
    public function __construct(\PDO $database)
    {
        $this->database = $database;
    }

    public function checkAndGetPlayer(int $playerId)
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

    public function getAllPlayer(): array
    {
        $query = 'SELECT * FROM `player` ORDER BY `id`';
        $statement = $this->getDb()->prepare($query);
        $statement->execute();

        return $statement->fetchAll();
    }

    public function createPlayer($player)
    {
        $query = 'INSERT INTO `player` (`id`, `name`) VALUES (:id, :name)';
        $statement = $this->getDb()->prepare($query);
        $statement->bindParam('id', $player->id);
	$statement->bindParam('name', $player->name);
        $statement->execute();

        return $this->checkAndGetPlayer((int) $this->getDb()->lastInsertId());
    }

    public function updatePlayer($player, $data)
    {
        if (isset($data->name)) { $player->name = $data->name; }

        $query = 'UPDATE `player` SET `name` = :name WHERE `id` = :id';
        $statement = $this->getDb()->prepare($query);
        $statement->bindParam('id', $player->id);
	$statement->bindParam('name', $player->name);
        $statement->execute();

        return $this->checkAndGetPlayer((int) $player->id);
    }

    public function deletePlayer(int $playerId)
    {
        $query = 'DELETE FROM `player` WHERE `id` = :id';
        $statement = $this->getDb()->prepare($query);
        $statement->bindParam('id', $playerId);
        $statement->execute();
    }
}
