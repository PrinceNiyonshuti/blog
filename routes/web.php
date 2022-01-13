<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class,'index'])->name('home');

Route::get('/posts/{post:slug}',[PostController::class,'show']);
Route::post('posts/{post:slug}/comments',[PostCommentsController::class,'store']);


Route::get('register',[RegisterController::class,'create'])->middleware('guest');
Route::post('register',[RegisterController::class,'store'])->middleware('guest');


Route::get('/login',[SessionController::class,'create'])->middleware('guest');
Route::post('/login',[SessionController::class,'store'])->middleware('guest');
Route::post('/logout',[SessionController::class,'destroy'])->middleware('auth');

Route::post('newsletter',NewsletterController::class);


// Admin Controllers
Route::get('admin/posts/create',[AdminPostController::class,'create'])->middleware('admin');
Route::post('admin/post',[AdminPostController::class,'store'])->middleware('admin');
Route::get('admin/posts',[AdminPostController::class,'index'])->middleware('admin');
Route::get('admin/posts/{post}/edit',[AdminPostController::class,'edit'])->middleware('admin');
Route::patch('admin/posts/{post}',[AdminPostController::class,'update'])->middleware('admin');
Route::delete('admin/posts/{post}',[AdminPostController::class,'destroy'])->middleware('admin');
