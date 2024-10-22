<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthContoller;

Route::post('/register', [AuthContoller::class, 'register']);
Route::post('/login', [AuthContoller::class, 'login']);
Route::post('/logout', [AuthContoller::class, 'logout']);
