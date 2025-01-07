<?php

namespace App\DesignPatterns\AbstractFactory;

class WoodenDoorFactory implements DoorFactoryInterface
{

    public function createDoor()
    {
        return new WoodenDoor();
    }

    public function createExpert()
    {
        return new Carpenter();
    }
}
