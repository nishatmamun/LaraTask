<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataController;

Route::get('/', function () {
    return view('welcome');
})->middleware(['dashboard']);;

Route::get('/store', [MainController::class,'store'])->name('fetch.data');
Route::get('/flash', [MainController::class,'flash'])->name('flash.data');
Route::get('/seeder', [MainController::class,'seeder'])->name('seed.data');
Route::post('/Signin', [LoginController::class,'signIn'])->name('Signin');
Route::get('/Signout', [LoginController::class,'signOut'])->name('signout')->middleware(['loginSession']);

Route::controller(DataController::class)->group(function() {
    Route::get('/userlist', 'userList')->name('users.list')->middleware(['loginSession']);
    Route::get('/postlist', 'postList')->name('posts.list')->middleware(['loginSession']);
    Route::get('/postcomment', 'postComment')->name('posts.comment')->middleware(['loginSession']);
    Route::get('/dashboard', 'dashboard')->name('dashboard')->middleware(['loginSession']);
    Route::get('/userdetails/{id}', 'userDetails')->name('user.details')->middleware(['loginSession']);
    Route::get('/postdetails/{id}', 'postDetails')->name('post.details')->middleware(['loginSession']);
});
























Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');