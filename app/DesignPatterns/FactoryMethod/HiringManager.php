<?php

namespace App\DesignPatterns\FactoryMethod;

abstract class HiringManager
{
    abstract protected function makeInterviewer(): InterviewerInterface;

    public function takeInterview()
    {
        $interviewer=$this->makeInterviewer();
        $interviewer->askQuestion();
    }
}
