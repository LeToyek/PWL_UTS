<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\MotorController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);
Route::middleware(['auth'])->group(function (){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::resource("/mobil",MobilController::class);
    Route::resource("/motor",MotorController::class);
    Route::delete('/mobil/{id}', [MobilController::class, 'destroy'])->name('mobil.destroy');
    Route::delete('/mobil/{id}', [MotorController::class, 'destroy'])->name('motor.destroy');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

