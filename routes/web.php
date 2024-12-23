<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StaffController;
use App\Models\Employee;
use App\Models\Staff;
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



Route::get('/',[EmployeeController::class,'index']);
Route::get('/employee',[EmployeeController::class,'index'])->name('listEmployee');
Route::get('/employee/create',[EmployeeController::class,'create'])->name('createEmployee');
Route::post('/employee/store',[EmployeeController::class,'store'])->name('storeEmployee');
Route::get('/employee/edit/{id}',[EmployeeController::class,'edit'])->name('editEmployee');
Route::put('/employee/update',[EmployeeController::class,'update'])->name('updateEmployee');
Route::delete('/employee/delete/{id}',[EmployeeController::class,'destroy'])->name('deleteEmployee');
