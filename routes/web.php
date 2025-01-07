<?php

use App\DesignPatterns\Builder\BurgerBuilder;
use Illuminate\Support\Facades\Route;
use App\DesignPatterns\FactoryMethod\DeveloperManager;
use App\DesignPatterns\SimpleFactory\WindowFactory;
use App\DesignPatterns\AbstractFactory\WoodenDoorFactory;
use App\DesignPatterns\AbstractFactory\IronDoorFactory;
use App\DesignPatterns\Singleton\Test;

Route::get('/simpleFactory', function () {

    $woodenWindow = WindowFactory::createWindow(10, 20);
    echo $woodenWindow->getHeight() . "<br>";
    echo $woodenWindow->getWidth();

});

Route::get('/factoryMethod', function () {
    $developerManager = new DeveloperManager();
    $developerManager->takeInterview();
});

Route::get('/abstractFactory', function () {

    $woodenDoorFactory = new WoodenDoorFactory();
    $woodenDoor = $woodenDoorFactory->createDoor();
    $carpenter = $woodenDoorFactory->createExpert();

    $woodenDoor->getDescription();
    $carpenter->getDescription();

    $ironDoorFactory = new IronDoorFactory();
    $ironDoor = $ironDoorFactory->createDoor();
    $welder = $ironDoorFactory->createExpert();

    $ironDoor->getDescription();
    $welder->getDescription();

});

Route::get('/builder', function () {

    $burgerBuilder = (new BurgerBuilder(10))->addLettuce()->addCheese()->build();

    dd($burgerBuilder);
});

Route::get('/singleton', function () {
    $test = Test::getInstance();
    $test2 = Test::getInstance();

    dd($test === $test2);

});

Route::get('/bridge',function(){

    $about=new \App\DesignPatterns\Bridge\About(new \App\DesignPatterns\Bridge\DarkTheme());
    $about->getContent();

});

