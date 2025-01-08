<?php

namespace App\DesignPatterns\Facade;

class FishFacade extends Facade
{

    protected static function getFacadeAccessor():string
    {
        return 'fish';
    }
}
