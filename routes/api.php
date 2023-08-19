<?php

use App\Http\Controllers\AuthenticationApiController;
use App\Http\Controllers\EmployeeApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/employees', [EmployeeApiController::class, 'index']);
    Route::post('/employees', [EmployeeApiController::class, 'store']);
    Route::get('/employees/{employee}', [EmployeeApiController::class, 'show']);
    Route::put('/employees/{employee}', [EmployeeApiController::class, 'update']);
    Route::patch('/employees/{employee}', [EmployeeApiController::class, 'update']);
    Route::delete('/employees/{employee}', [EmployeeApiController::class, 'destroy']);
    Route::get('/users', [AuthenticationApiController::class, 'index']);
    Route::post('/logout', [AuthenticationApiController::class, 'logout']);
});


Route::post('/login', [AuthenticationApiController::class, 'login']);
