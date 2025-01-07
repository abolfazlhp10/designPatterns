<?php

namespace App\DesignPatterns\FactoryMethod;

class CommunityExecutive implements InterviewerInterface
{

    public function askQuestion()
    {
        echo 'this is about Community Executive';
    }
}
