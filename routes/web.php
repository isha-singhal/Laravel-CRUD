<?php

use App\Http\Controllers\addemp;
use App\Http\Controllers\delemp;
use App\Http\Controllers\updemp;
use App\Models\employee;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $employeedatadb = employee::SELECT('id', 'name', 'email', 'Address', 'phone')->get();

    return view('home')->with(['employeedata' =>$employeedatadb]); //this will act as variable
});

Route::post('/AddEmp',[addemp::class,'AddEmp']);
//Route::post('/AddEmp', 'App\Http\Controllers\addemp@AddEmp');

Route::get('/DelEmp/{id}',[delemp::class,'DelEmp']);
Route::post('/UpdateEmp',[updemp::class,'UpdateEmp']);
