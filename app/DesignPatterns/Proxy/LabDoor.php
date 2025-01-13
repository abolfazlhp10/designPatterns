<?php

namespace App\DesignPatterns\Proxy;

class LabDoor implements DoorInterface
{

    public function open(): void
    {
        echo 'the lab door is open' . PHP_EOL;
    }

    public function close(): void
    {
        echo 'the lab door is close' . PHP_EOL;
    }
}
