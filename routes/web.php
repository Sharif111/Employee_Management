<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeinfoController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('')->group(function () {
    Route::resource('employees',EmployeeController::class);
    Route::delete('/employees/{id}',[EmployeeController::class,'deleteemp']);

    Route::resource('employeeinfo',EmployeeinfoController::class);
    Route::get('/search',[EmployeeinfoController::class,'search'])->name('employeeinfo.search');
    Route::get('/create1',[EmployeeinfoController::class,'create1'])->name('employeeinfo.create1');
});
