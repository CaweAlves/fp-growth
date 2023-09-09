<?php

namespace app\entitys;

class Product implements EntityInterface
{
    public function __construct(private int $id, private string $name)
    {
    }
}