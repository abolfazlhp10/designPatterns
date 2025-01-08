<?php

namespace App\DesignPatterns\Composite;

class Developer implements EmployeeInterface
{

    public function getName()
    {
        echo 'this is abhp';
    }

    public function getSalary()
    {
        return 10000;
    }

    public function getRole()
    {
        echo 'this is developer';
    }
}
