<?php

use App\Http\Controllers\adminCompanyController;
use App\Http\Controllers\AdminEmployeesController;
use App\Http\Controllers\companyController;
use App\Http\Controllers\employeesController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

Route::middleware('auth')->group(function(){
    route::resource('/company',companyController::class);
    route::resource('/employee',employeesController::class);

    route::resource('/adminCompany',adminCompanyController::class);
    route::resource('/adminEmployee',AdminEmployeesController::class);
});

Auth::routes();


