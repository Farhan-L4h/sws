<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\espController;

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
    return view('welcome');
});

Route::controller(espController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/form', 'form')->name('form');

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
