<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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
    return view('layouts.master');
});


// -------------------------- main dashboard ----------------------//
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index')->name('home');
    Route::get('user/profile/page', 'userProfile')->name('user/profile/page');
    Route::get('teacher/dashboard', 'teacherDashboardIndex')->name('teacher/dashboard');
    Route::get('student/dashboard', 'studentDashboardIndex')->name('student/dashboard');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/listarusuarios', 'index')->name('listarusuarios');
    Route::get('Crearusuarios', 'userView')->name('Crearusuarios');
});
