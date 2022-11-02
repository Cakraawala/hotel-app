<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::get('/register', [LoginController::class, 'register'])->middleware('guest');


Route::get('/dashboard', [DashboardController::class, 'index']);
