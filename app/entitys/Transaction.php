<?php

namespace app\entitys;

class Transaction implements EntityInterface
{
    public function __construct(private int $id, private int $idProduct)
    {
    }
}