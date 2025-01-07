<?php

namespace App\DesignPatterns\Bridge;

class Careers implements WebpageInterface
{

    protected $theme;

    public function __construct(ThemeInterface $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        echo "Careers with theme : ".$this->theme->getColor();
    }
}
