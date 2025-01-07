<?php

namespace App\DesignPatterns\FactoryMethod;

class DeveloperManager extends HiringManager
{

    public function makeInterviewer(): InterviewerInterface
    {
        return new Developer();
    }
}
