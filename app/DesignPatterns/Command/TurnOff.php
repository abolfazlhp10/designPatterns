<?php

namespace App\DesignPatterns\Command;

class TurnOff implements CommandInterface
{

    private $bulb;

    public function __construct($bulb)
    {
        $this->bulb = $bulb;
    }

    public function execute()
    {
        $this->bulb->turnOff();
    }

    public function redo()
    {
        $this->execute();
    }

    public function undo()
    {
        $this->bulb->turnOn();
    }
}
