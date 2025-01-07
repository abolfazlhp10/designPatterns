<?php

namespace App\DesignPatterns\AbstractFactory;

class Welder implements ExpertInterface
{

    public function getDescription(): void
    {
        echo 'Welder';
    }
}
