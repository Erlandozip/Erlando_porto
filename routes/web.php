<?php

use app\Http\Controllers\konten;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kontent;
Route::get('/', [konten::class, 'index']);
Route::get('/konten', [app\Http\Controllers\Controller::class, 'konten']);