<?php

namespace App\DesignPatterns\AbstractFactory;

class Carpenter implements ExpertInterface
{

    public function getDescription(): void
    {
        echo 'Carpenter';
    }
}
