<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = Employee::paginate(10);
        // $data = Employee::where('age', '>', 90)->get();
        // $data = Employee::where('first_name', 'LIKE', 'a%')->get();

        // $data = DB::select('select * from employees');
        // $data = Employee::paginate(20);

        // $data = Employee::select('first_name', 'last_name', 'email')->get();

        //manipulate $data
        //you can add business logic codes

        return view('employee.index', ['employees' => $data]);
    }

    public function show(Employee $employee)
    {
        return view('employee.show')->with('employee', $employee);
    }

    public function edit(Employee $employee)
    {
        return view('employee.edit')->with('employee', $employee);
    }

    public function update(EmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());
        return redirect()->route('employees.show', ['employee' => $employee->id]);
    }

    public function create()
    {
        return view("employee.create");
    }

    public function store(EmployeeRequest $request)
    {
        Employee::create($request->all());
        return redirect()->route('employees.index');
    }

    public function destroy(Employee $employee)
    {
        Employee::destroy($employee->id);
        return redirect()->route('employees.index');
    }
}
