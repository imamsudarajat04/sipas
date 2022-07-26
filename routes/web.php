<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SuratMasukController;

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

// Auth::routes();

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login.index');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('surat-masuk', SuratMasukController::class);