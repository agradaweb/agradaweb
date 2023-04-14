<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OptionController;

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

Route::resource('blog', PostController::class)->names('blog');

Route::resource('options', OptionController::class);