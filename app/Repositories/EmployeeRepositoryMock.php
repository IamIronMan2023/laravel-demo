<?php

namespace App\Repositories;

use App\Models\Employee;
use App\Repositories\EmployeeRepositoryInterface;

class EmployeeRepositoryMock implements EmployeeRepositoryInterface
{
    public function all()
    {
        return Employee::paginate(20);
    }

    public function update(array $employeeData, Employee $employee)
    {
        $employee->update($employeeData);
    }

    public function store(array $employeeData)
    {
        Employee::create($employeeData);
    }

    public function destroy($id)
    {
        Employee::destroy($id);
    }
}
