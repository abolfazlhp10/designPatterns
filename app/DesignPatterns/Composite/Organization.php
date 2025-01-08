<?php

namespace App\DesignPatterns\Composite;

class Organization
{
    protected $employees;

    public function __construct()
    {
        $this->employees = [];
    }

    public function addEmployee($employee)
    {
        $this->employees[] = $employee;
    }

    public function getNetSalaries()
    {
        $netSalaries = 0;

        foreach ($this->employees as $employee) {
            $netSalaries += $employee->getSalary();
        }

        return $netSalaries;
    }

}
