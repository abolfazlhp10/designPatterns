<?php

namespace App\DesignPatterns\AbstractFactory;

class IronDoor implements DoorInterface
{

    public function getDescription(): void
    {
        echo 'iron door' . PHP_EOL;
    }
}
