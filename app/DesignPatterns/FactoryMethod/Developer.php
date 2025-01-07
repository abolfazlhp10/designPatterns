<?php

namespace App\DesignPatterns\FactoryMethod;

class Developer implements InterviewerInterface
{

    public function askQuestion()
    {
        echo 'this is about design patterns';
    }
}
