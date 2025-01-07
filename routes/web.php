<?php

use Illuminate\Support\Facades\Route;
use App\DesignPatterns\FactoryMethod\DeveloperManager;
use App\DesignPatterns\SimpleFactory\WindowFactory;

Route::get('/simpleFactory', function () {

    $woodenWindow=WindowFactory::createWindow(10,20);
    echo $woodenWindow->getHeight()."<br>";
    echo $woodenWindow->getWidth();

});

Route::get('/factoryMethod', function () {
    $developerManager=new DeveloperManager();
    $developerManager->takeInterview();
});
