<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [ClassController::class, '1']);
Route::get('/login', [ClassController::class, 'login']);
Route::get('/register', [ClassController::class, 'register']);
