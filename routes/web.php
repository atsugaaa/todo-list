<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Middleware;

Route::get('/users', [ 'App\Http\Controllers\UsersController' ,'index'])->name('home')->middleware('users');
Route::get('/users/login', ['App\Http\Controllers\UsersAuthController', 'showLoginForm'])->name('users.login');
Route::get('/users/register', ['App\Http\Controllers\UsersAuthController', 'register'])->name('users.register');
Route::post('/users/login', ['App\Http\Controllers\UsersAuthController', 'login'])->name('users.login.submit');
Route::post('/users/register', ['App\Http\Controllers\UsersAuthController', 'store'])->name('users.register.submit');
Route::get('/users/logout', ['App\Http\Controllers\UsersAuthController', 'logout'])->name('users.logout')->middleware('users');
Route::fallback(function () {
    return redirect('/users');  // Redirect ke halaman home
});