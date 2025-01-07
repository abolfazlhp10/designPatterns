<?php

namespace App\DesignPatterns\Bridge;

class DarkTheme implements ThemeInterface
{

    public function getColor(): string
    {
        return  'Dark theme color';
    }
}
