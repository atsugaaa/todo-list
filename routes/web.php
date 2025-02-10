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

Route::get('/task/create', ['App\Http\Controllers\UsersController', 'create'])->name('task.create')->middleware('users');
Route::post('/task/store', ['App\Http\Controllers\UsersController', 'store'])->name('task.store')->middleware('users');
Route::get('/task/{id}/edit', ['App\Http\Controllers\UsersController', 'edit'])->name('task.edit')->middleware('users');
Route::put('/task/{id}/update', ['App\Http\Controllers\UsersController', 'update'])->name('task.update')->middleware('users');
Route::delete('/task/{id}/destroy', ['App\Http\Controllers\UsersController', 'destroy'])->name('task.destroy')->middleware('users');

Route::fallback(function () {
    return redirect('/users');  // Redirect ke halaman home
});