<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;
// use App\Models\User;
// use App\Models\Phone;
// use App\Models\Post;
// use App\Models\Comment;

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

// Route::get('/store', [PostController::class,'store']);
// Route::get('/store', [CommentController::class,'store']);
// Route::get('/store', [UserController::class,'store']);

Route::get('/store', [MainController::class,'store'])->name('fetch.data');
Route::get('/flash', [MainController::class,'flash'])->name('flash.data');
Route::get('/seeder', [MainController::class,'seeder'])->name('seed.data');