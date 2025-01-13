<?php

namespace App\DesignPatterns\ChainOfResponsibility;

class Bank extends Account
{
    public function __construct($balance)
    {
        $this->balance = $balance;
    }
}
