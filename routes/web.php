<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/register', [UserController::class, 'showForm']);
Route::post('/register', [UserController::class, 'submitForm']);
Route::get('/success', [UserController::class, 'showSuccess']);