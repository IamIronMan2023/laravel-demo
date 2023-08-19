<?php

namespace App\Repositories;

use App\Models\Employee;

interface EmployeeRepositoryInterface
{
    public function all();
    public function update(array $employeeData, Employee $employee);
    public function store(array $employeeData);
    public function destroy($id);
}
