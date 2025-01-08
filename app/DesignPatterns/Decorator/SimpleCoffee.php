<?php

namespace App\DesignPatterns\Decorator;

class SimpleCoffee implements CoffeeInterface
{

    public function getDescription(): void
    {
        echo 'this is simple coffee';
    }

    public function getPrice(): float
    {
        return 10;
    }
}
