<?php

namespace app\repositories;

use app\database\Connection;
use app\entitys\Entity;

class BaseRepository implements RepositoryInterface
{

    protected string $tableName;

    public function __construct(Entity $entity, protected Connection $connection)
    {
        $entity->tableName ??= $this->tableName = printf('%ss', $entity->getClassName());
    }

    public function findById(int $id)
    {
    }
    public function findAll()
    {
    }
    public function create(array $data)
    {
    }
    public function update(int $id, array $data)
    {
    }
    public function delete(int $id)
    {
    }

}