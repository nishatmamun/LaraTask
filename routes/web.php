<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';

Route::get('/store', [MainController::class,'store'])->name('fetch.data');
Route::get('/flash', [MainController::class,'flash'])->name('flash.data');
Route::get('/seeder', [MainController::class,'seeder'])->name('seed.data');
Route::get('/Signin', [LoginController::class,'signIn'])->name('Signin');

Route::get('/userlist', [DataController::class,'userList'])->name('users.list');
Route::get('/postlist', [DataController::class,'postList'])->name('posts.list');























Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');