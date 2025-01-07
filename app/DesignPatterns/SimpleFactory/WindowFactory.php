<?php

namespace App\DesignPatterns\SimpleFactory;

class WindowFactory
{
    public static function createWindow($height, $width){
        return new WoodenWindow($height, $width);
    }
}
