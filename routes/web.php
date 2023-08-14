<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees', [EmployeeController::class, 'index'])->name("employees.index");
Route::get('/employees/{employee}', [EmployeeController::class, 'show'])->name("employees.show");
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name("employees.edit");
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
