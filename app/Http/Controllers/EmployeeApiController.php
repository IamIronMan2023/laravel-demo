<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeApiController extends Controller
{
    public function index()
    {
        return Employee::all();
    }

    public function show(Employee $employee)
    {
        return $employee;
    }

    public function store(EmployeeRequest $request)
    {
        $employee = Employee::create($request->all());
        return response(
            [
                'message' => 'Employee successfully created',
                'employee' => $employee,
                'id' => $employee->id
            ],
            201
        );
    }

    public function update(Request $request, Employee $employee)
    {
        $employee->update($request->all());
        return response([
            'message' => 'Employee successfully updated',
            'employee' => $employee,
            'id' => $employee->id
        ]);
    }

    public function destroy(Employee $employee)
    {
        Employee::destroy($employee->id);

        return response([
            'message' => 'Employee successfully deleted'
        ]);
    }
}
