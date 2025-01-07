<?php

use Illuminate\Support\Facades\Route;

Route::get('/simpleFactory', function () {

    $woodenWindow=\App\DesignPatterns\SimpleFactory\WindowFactory::createWindow(10,20);
    echo $woodenWindow->getHeight()."<br>";
    echo $woodenWindow->getWidth();

});
