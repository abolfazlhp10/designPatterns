<?php

namespace App\DesignPatterns\AbstractFactory;

class WoodenDoor implements DoorInterface
{

    public function getDescription(): void
    {
        echo 'Wooden Door' . PHP_EOL;
    }
}
