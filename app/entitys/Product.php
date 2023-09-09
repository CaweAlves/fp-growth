<?php

namespace app\entitys;

class Product extends Entity
{
    public function __construct(private int $id, private string $name)
    {
    }
}