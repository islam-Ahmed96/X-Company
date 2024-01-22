<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::group(['prefix'=> '/', 'middleware'=> 'auth', 'as'=> 'home.'], function () {

    Route::get('home', [HomeController::class, 'index'])->name('index');
    Route::get('projects', [HomeController::class,'projects'])->name('projects');
    Route::get('about-us', [HomeController::class,'about'])->name('about');
    Route::get('contact-us', [HomeController::class,'contact'])->name('contact');
    
});

Route::group(['prefix'=> 'projects/', 'middleware'=> 'auth', 'as'=> 'project.'], function () {

    Route::get('show/{id}', [HomeController::class, 'show'])->name('show');
    
});
