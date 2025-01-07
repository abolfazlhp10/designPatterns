<?php

namespace App\DesignPatterns\Bridge;

class LightTheme implements ThemeInterface
{

    public function getColor(): string
    {
        return  'Light theme color' ;
    }
}
