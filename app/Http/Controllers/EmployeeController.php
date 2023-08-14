<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        // $data = Employee::all();
        // $data = Employee::where('age', '>', 90)->get();
        // $data = Employee::where('first_name', 'LIKE', 'a%')->get();

        // $data = DB::select('select * from employees');
        // $data = Employee::paginate(20);

        $data = Employee::select('first_name', 'last_name', 'email')->get();

        //manipulate $data
        //you can add business logic codes

        return view('employee.index', ['employees' => $data]);
    }
}