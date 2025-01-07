<?php

namespace App\DesignPatterns\Singleton;

class Test
{

    protected static $instance;
    private function __construct(){}

    public static function getInstance(){

        if(self::$instance == null){
            self::$instance = new Test();
        }
        return self::$instance;
    }
}
