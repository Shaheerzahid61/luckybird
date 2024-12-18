<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');