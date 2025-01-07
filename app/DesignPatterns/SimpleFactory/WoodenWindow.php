<?php

namespace App\DesignPatterns\SimpleFactory;


class WoodenWindow implements WindowInterface
{

    private $height;
    private $width;

    public function __construct($height, $width)
    {
        $this->height=$height;
        $this->width=$width;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }
}
