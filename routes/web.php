<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;

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
Route::get('/',[AuthController::class,'getLogin'])->name('getLogin');
Route::post('/login',[AuthController::class,'login'])->name('postLogin');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'store'])->name('store');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::middleware([AuthMiddleware::class])->group(function(){
    Route::get('/employee',[EmployeeController::class,'index'])->name('listEmployee');
    Route::get('/employee/create',[EmployeeController::class,'create'])->name('createEmployee');
    Route::post('/employee/store',[EmployeeController::class,'store'])->name('storeEmployee');
    Route::get('/employee/edit/{id}',[EmployeeController::class,'edit'])->name('editEmployee');
    Route::put('/employee/update',[EmployeeController::class,'update'])->name('updateEmployee');
    Route::delete('/employee/delete/{id}',[EmployeeController::class,'destroy'])->name('deleteEmployee');
    # User
    Route::get('/user',[UserController::class,'index'])->name('user.list');
    Route::get('/user/create',[UserController::class,'create'])->name('user.create');
    Route::post('/user/store',[UserController::class,'store'])->name('user.store');  
    Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::put('/user/update',[UserController::class,'update'])->name('user.update');
    Route::delete('/user/delete/{id}',[UserController::class,'destroy'])->name('user.delete');
});