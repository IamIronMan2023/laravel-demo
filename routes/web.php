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

// Route::view('/welcome', 'welcome');

// Route::get('/welcome', function () {
//     return "Hello World!";
// });

// Route::get()
// Route::post()
// Route::put()
// Route::patch()
// Route::delete()

// Route::match(['post'], '/sample', function () {
//     return "Dispaly Get and Post";
// });

// Route::post('/sample', function () {
//     return "Dispaly Get and Post";
// });

Route::view('/about', 'about');
Route::view('/employee/list', 'employee.index');

Route::redirect('/employee/about', '/about');


Route::get('/request', function (Request $request) {
    // dd($request);
    return "Get Request";
});

Route::get(
    '/response-page',
    function () {
        return response("Hello World!", 200);
    }
);

Route::get('/user/{id}/{action}', function ($id, $action) {
    return response($action . " " . $id, 200);
});


Route::get('/display-jsondata', function () {
    $jsondata = ['first_name' => 'Juan', 'last_name' => 'Dela Cruz', 'age' => 20];
    return response()->json($jsondata, 200);
});


Route::get('/download', function () {
    $file_name = 'sample-download.txt';
    $path = public_path() . "/" . $file_name;
    $header = array("Content-type: application/text-plain");

    return response()->download($path, $file_name, $header);
});
