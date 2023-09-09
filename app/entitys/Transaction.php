<?php

namespace app\entitys;

class Transaction extends Entity
{
    public function __construct(private int $id, private int $idProduct)
    {
    }
}