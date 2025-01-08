<?php

namespace App\DesignPatterns\Composite;

class Designer implements EmployeeInterface
{

    public function getName()
    {
        echo 'reza';
    }

    public function getSalary()
    {
        return 2000;
    }

    public function getRole()
    {
        echo 'designer';
    }
}
