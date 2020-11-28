<?php

use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Guru\SoalController;
use App\Http\Controllers\HomeController;
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
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('users', UserController::class)->middleware('can:isAdmin');
    Route::resource('produks', ProdukController::class)->middleware('can:isAdmin');
    Route::resource('soals', SoalController::class)->middleware('can:isGuru');
    Route::resource('transaksis', TransaksiController::class);
});