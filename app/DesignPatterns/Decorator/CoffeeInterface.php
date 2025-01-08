<?php

namespace App\DesignPatterns\Decorator;

interface CoffeeInterface
{
    public function getDescription(): void;

    public function getPrice(): float;
}
