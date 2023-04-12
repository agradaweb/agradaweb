<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| In the RouteServiceProvider the prefix "admin" has already
|  been defined for all the routes declared in this file.
|
|
*/

Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');


Route::get('/blank-page', function () {
    return view('backend.utility.blank-page');
})->name('blankpage');

Route::get('/employees', function () {
    return view('backend.employees.index');
})->name('employees');

