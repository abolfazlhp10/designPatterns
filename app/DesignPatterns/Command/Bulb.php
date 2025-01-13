<?php

namespace App\DesignPatterns\Command;

class Bulb
{
    public function turnOn(){

        echo 'the bulb is on'.PHP_EOL;
    }

    public function turnOff()
    {
        echo 'the bulb is off'.PHP_EOL;
    }
}
