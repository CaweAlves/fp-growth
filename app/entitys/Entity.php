<?php

namespace app\entitys;

abstract class Entity
{

    public string $tableName = null;

    public function getClassName()
    {
        return static::class;
    }
}