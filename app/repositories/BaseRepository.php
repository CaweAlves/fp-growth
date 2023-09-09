<?php

namespace app\repositories;

use app\entitys\EntityInterface;

class BaseRepository implements RepositoryInterface
{

    public function __construct(EntityInterface $entity)
    {
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