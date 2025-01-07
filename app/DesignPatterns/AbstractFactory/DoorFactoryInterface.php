<?php

namespace App\DesignPatterns\AbstractFactory;

interface DoorFactoryInterface
{
    public function createDoor();

    public function createExpert();
}
