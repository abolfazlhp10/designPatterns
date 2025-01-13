<?php

namespace App\DesignPatterns\Proxy;

class SecuredDoor
{
    private $door;
    public function __construct(DoorInterface $door)
    {
        $this->door = $door;
    }

    public function open($password){

        if($this->authenticate($password)){
            $this->door->open();
        }else{
            echo 'the password is not correct';
        }

    }

    public function authenticate($password){
        if($password=='secret'){
            return true;
        }
    }
}
