<?php

namespace app\entitys;

class Transaction
{
    public function __construct(private int $id, private int $idProduct)
    {
    }
}