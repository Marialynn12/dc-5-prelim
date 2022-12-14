<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TravelController;
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


Route::get('/', [AuthController::class, 'loginForm'])->name('login');
Route::post('/', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);



Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function() {
        return view('dashboard');
    });

    Route::get('/travel', [TravelController::class, 'index']);
    Route::get('/edit/{travel}', [TravelController::class, 'edit']);
    Route::get('/delete/{travel}', [TravelController::class, 'destroy']);
});
