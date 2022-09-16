<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/store', [MainController::class,'store'])->name('fetch.data');
Route::get('/flash', [MainController::class,'flash'])->name('flash.data');
Route::get('/seeder', [MainController::class,'seeder'])->name('seed.data');
Route::post('/Signin', [LoginController::class,'signIn'])->name('Signin');
Route::get('/Signout', [LoginController::class,'signOut'])->name('signout')->middleware(['loginSession']);

Route::get('/userlist', [DataController::class,'userList'])->name('users.list')->middleware(['loginSession']);
Route::get('/postlist', [DataController::class,'postList'])->name('posts.list')->middleware(['loginSession']);
Route::get('/postcomment', [DataController::class,'postComment'])->name('posts.comment')->middleware(['loginSession']);
Route::get('/dashboard', [DataController::class,'dashboard'])->name('dashboard')->middleware(['loginSession']);























Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');