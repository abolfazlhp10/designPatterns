<?php

namespace App\DesignPatterns\ChainOfResponsibility;

class PayPal extends Account
{
    public function __construct($balance)
    {
        $this->balance = $balance;
    }
}
