<?php

namespace app\repositories;

use app\database\Connection;
use app\entitys\Entity;
use PDO;

class BaseRepository implements RepositoryInterface
{

    protected string $tableName;
    protected PDO $connection;

    public function __construct(Entity $entity, protected Connection $connectionClass)
    {
        $entity->tableName ??= $this->tableName = printf('%ss', $entity->getClassName());
        $this->connection = $this->connectionClass->connect();
    }

    public function findById(int $id)
    {
        $stmt = $this->connection->prepare("SELECT * FROM $this->tableName WHERE id = :id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function findAll()
    {
        $stmt = $this->connection->prepare("SELECT * FROM $this->tableName");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function create(array $data, ...$columns)
    {
        $stmt = $this->connection->prepare("INSERT INTO $this->tableName ($columns) VALUES (:data)");
        $stmt->bindValue(':data', $data);
        $stmt->execute();
    }

    public function update(int $id, array $data)
    {
        $newData = $this->newData($data);
        $stmt = $this->connection->prepare("UPDATE $this->tableName SET $newData WHERE id = :id");
        $stmt->bindValue(':id', $id);
    }

    public function delete(int $id)
    {
        $stmt = $this->connection->prepare("DELETE FROM $this->tableName WHERE id = :id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }

    private function newData(array $data)
    {
        $newData = array_map(function ($value, $column) {
            return "$column = $value";
        }, $data, array_keys($data));

        return implode(', ', $newData);
    }

}