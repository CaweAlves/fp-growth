<?php

namespace app\entitys;

class Product
{
    public function __construct(private int $id, private string $name)
    {
    }
}