<?php

namespace App\DesignPatterns\FactoryMethod;

class MarketingManager extends HiringManager
{

    public function makeInterviewer(): InterviewerInterface
    {
        return new CommunityExecutive();
    }
}
