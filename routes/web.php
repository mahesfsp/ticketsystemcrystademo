<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/users', '\App\Http\Controllers\UserController');
Route::get('/users/delete/{id}', '\App\Http\Controllers\UserController@delete')->name('delete');