<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('user/dashboard');
});

Route::resource('users', 'App\Http\Controllers\UserController');
Route::resource('surat', 'App\Http\Controllers\UserController');

Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('form_pelaporan', [UserController::class, 'form_pelaporan'])->name('form_pelaporan');
Route::get('surat_domisili', [UserController::class, 'surat_domisili'])->name('surat_domisili');