<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ExpenceListController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Auth::routes(['register' => false]);
Route::get('/', [HomeController::class, 'index'])->name('dashboard');

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::resources([
    'car' => CarController::class,
    'expenceList' => ExpenceListController::class,
]);

