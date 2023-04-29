<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{page}/{section}' , [HomeController::class , 'index'])->name('home');


Route::get('/posts' , [PostController::class , 'index'])->name('posts.index');
Route::prefix('post')->group(function () {
    Route::get('/create' , [PostController::class , 'create'])->name('posts.create');
    Route::post('/store' , [PostController::class , 'store'])->name('posts.store');
    Route::get('/{post}' , [PostController::class , 'show'])->name('posts.show');
    Route::get('/{post}/edit' , [PostController::class , 'edit'])->name('posts.edit');
    Route::put('/{post}/update' , [PostController::class , 'update'])->name('posts.update');
    Route::delete('/{post}/delete' , [PostController::class , 'destroy'])->name('posts.destroy');
});