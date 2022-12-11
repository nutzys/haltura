<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


//Show index page
Route::get('/', [PostsController::class, 'index']);

//Show all posts
Route::get('/posts', [PostsController::class, 'all']);

//Load create page
Route::get('/posts/create', [PostsController::class, 'create']);

//Store new post
Route::post('/posts/{post}', [PostsController::class, 'store']);

//Show one item
Route::get('/posts/{post}', [PostsController::class, 'show']);



//=====User routes=======

//Load register forms
Route::get('/register', [UsersController::class, 'register']);

//Save registered user
Route::post('/register/{user}', [UsersController::class, 'store']);

//Load login forms
Route::post('/authenticate/{user}', [UsersController::class, 'authenticate']);

Route::post('/logout', [UsersController::class, 'logout']);


//=====Page routes=======

//Show profile page
Route::get('/profile/{user}', [PagesController::class, 'profile']);

