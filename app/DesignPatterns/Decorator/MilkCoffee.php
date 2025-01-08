<?php

namespace App\DesignPatterns\Decorator;

class MilkCoffee implements CoffeeInterface
{
    private $coffee;

    public function __construct(CoffeeInterface $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getDescription(): void
    {
        echo $this->coffee->getDescription().",milk";
    }

    public function getPrice(): float
    {
        return $this->coffee->getPrice()+1;
    }
}
