<?php

use App\DesignPatterns\Builder\BurgerBuilder;
use Illuminate\Support\Facades\Route;
use App\DesignPatterns\FactoryMethod\DeveloperManager;
use App\DesignPatterns\SimpleFactory\WindowFactory;
use App\DesignPatterns\AbstractFactory\WoodenDoorFactory;
use App\DesignPatterns\AbstractFactory\IronDoorFactory;
use App\DesignPatterns\Singleton\Test;
use App\DesignPatterns\Composite\Organization;
use App\DesignPatterns\Composite\Developer;
use App\DesignPatterns\Composite\Designer;
use App\DesignPatterns\Decorator\SimpleCoffee;
use App\DesignPatterns\Decorator\MilkCoffee;
use App\DesignPatterns\Decorator\WhipCoffee;

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

Route::get('/bridge', function () {

    $about = new \App\DesignPatterns\Bridge\About(new \App\DesignPatterns\Bridge\DarkTheme());
    $about->getContent();

});

Route::get('/composite', function () {

    $developer = new Developer();
    $designer = new Designer();


    $organization = new Organization();

    $organization->addEmployee($designer);
    $organization->addEmployee($developer);


    echo $organization->getNetSalaries();
});

Route::get('/decorator', function () {

    $simpleCoffee = new SimpleCoffee();
    echo $simpleCoffee->getDescription() . "<br>";
    echo $simpleCoffee->getPrice() . "<br>";


    $milkCoffee = new MilkCoffee($simpleCoffee);
    echo $milkCoffee->getDescription() . "<br>";
    echo $milkCoffee->getPrice() . "<br>";


    $whipCoffee = new WhipCoffee($milkCoffee);
    echo $whipCoffee->getDescription();
    echo $whipCoffee->getPrice() . "<br>";

});

Route::get('/facade', function () {
    \App\DesignPatterns\Facade\FishFacade::swim();
});

Route::get('proxy', function () {

    (new \App\DesignPatterns\Proxy\LabDoor())->open();

//   $door=new \App\DesignPatterns\Proxy\SecuredDoor(new \App\DesignPatterns\Proxy\LabDoor());
//   $door->open('secret');

});

Route::get('chainOfResponsibility', function () {

    $bank = new \App\DesignPatterns\ChainOfResponsibility\Bank(1000);
    $bitcoin = new \App\DesignPatterns\ChainOfResponsibility\Bitcoin(1500);
    $paypal = new \App\DesignPatterns\ChainOfResponsibility\PayPal(2000);


    $bank->setNext($bitcoin);
    $bitcoin->setNext($paypal);

    if ($bank->pay(1500)) {

    } elseif ($bitcoin->pay(1500)) {

    } elseif ($paypal->pay(1500)){

    }


});

Route::get('/command',function(){

   $remote=new \App\DesignPatterns\Command\RemoteControl();
   $remote->submit(new \App\DesignPatterns\Command\TurnOff(new \App\DesignPatterns\Command\Bulb()));


});

