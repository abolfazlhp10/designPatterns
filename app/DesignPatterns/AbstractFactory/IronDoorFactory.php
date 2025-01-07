<?php

namespace App\DesignPatterns\AbstractFactory;

class IronDoorFactory implements DoorFactoryInterface
{

    public function createDoor()
    {
        return new IronDoor();
    }

    public function createExpert()
    {
        return new Welder();
    }
}
