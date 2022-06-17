<?php

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
    return view('welcome');
});
Route::post('saveuserinfo', [App\Http\Controllers\WelcomeController::class, 'saveuserinfo'])->name('saveuserinfo');
Route::post('savequestioninfo', [App\Http\Controllers\WelcomeController::class, 'savequestioninfo'])->name('savequestioninfo');

