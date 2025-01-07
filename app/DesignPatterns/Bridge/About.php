<?php

namespace App\DesignPatterns\Bridge;

class About implements WebpageInterface
{

    protected $theme;

    public function __construct(ThemeInterface $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        echo 'this is about with theme : '.$this->theme->getColor();
    }
}
