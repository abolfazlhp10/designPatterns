<?php

namespace App\DesignPatterns\ChainOfResponsibility;

abstract class Account
{

    private $account;
    protected $balance;

    public function setNext(Account $account)
    {
        $this->account = $account;
    }

    public function pay($amountToPay)
    {

        if ($this->canPay($amountToPay)) {

            echo "you pay $amountToPay using this account : " . get_class($this) . "<br>";
            return true;

        }
        elseif ($this->account != null) {

            echo "you can not pay using this account : " . get_class($this) . "<br>";

        }
        else {

            throw  new \Exception("your accounts doesn't have enough balance");

        }

    }

    private function canPay($amount)
    {
        if ($this->balance >= $amount) {
            return true;
        }

    }

}
