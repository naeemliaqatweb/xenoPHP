<?php

use App\Services\Route;
use App\Middleware\Auth;

Route::get('login', 'LoginController', 'index');
Route::post('submit-login', 'LoginController', 'login');
Route::get('register', 'RegisterController', 'index');
Route::post('submit-register', 'RegisterController', 'register');
Route::get('logout', 'DashboardController', 'logout');
Route::get('dashboard', 'DashboardController', 'index', [Auth::class]);
Route::get('', 'DashboardController', 'index');
