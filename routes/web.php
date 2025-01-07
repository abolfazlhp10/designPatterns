<?php

use Illuminate\Support\Facades\Route;
use App\DesignPatterns\FactoryMethod\DeveloperManager;
use App\DesignPatterns\SimpleFactory\WindowFactory;
use App\DesignPatterns\AbstractFactory\WoodenDoorFactory;
use App\DesignPatterns\AbstractFactory\IronDoorFactory;

Route::get('/simpleFactory', function () {

    $woodenWindow=WindowFactory::createWindow(10,20);
    echo $woodenWindow->getHeight()."<br>";
    echo $woodenWindow->getWidth();

});

Route::get('/factoryMethod', function () {
    $developerManager=new DeveloperManager();
    $developerManager->takeInterview();
});

Route::get('/abstractFactory',function(){

    $woodenDoorFactory=new WoodenDoorFactory();
    $woodenDoor=$woodenDoorFactory->createDoor();
    $carpenter=$woodenDoorFactory->createExpert();

    $woodenDoor->getDescription();
    $carpenter->getDescription();

    $ironDoorFactory=new IronDoorFactory();
    $ironDoor=$ironDoorFactory->createDoor();
    $welder=$ironDoorFactory->createExpert();

    $ironDoor->getDescription();
    $welder->getDescription();

});
