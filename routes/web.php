<?php

use App\Http\Controllers\KontenController;
use Illuminate\Support\Facades\Route;
Route::get('/', [KontenController::class, 'index']);
Route::get('/konten', [KontenController::class, 'Konten']);