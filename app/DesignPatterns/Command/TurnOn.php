<?php

namespace App\DesignPatterns\Command;

class TurnOn implements CommandInterface
{
    private $bulb;

    public function __construct($bulb)
    {
        $this->bulb = $bulb;
    }

    public function execute()
    {
        $this->bulb->turnOn();
    }

    public function redo()
    {
        $this->execute();
    }

    public function undo()
    {
        $this->bulb->turnOff();
    }
}
