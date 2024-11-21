<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PostController;

//i leave commented the auth one, to avoid havin to login at every time, plus, there si not test user yet
/*
Route::resources([
  'posts' => PostController::class,
]);
*/


Route::middleware(['auth'])->group(function () {
    Route::resources([
      'posts' => PostController::class,
    ]);
});

//also this one allows pass withouth auth

Route::controller(PostController::class)->group(function () {
  Route::get('/posts', 'index')->name('posts.index');
  Route::get('/posts/{post}', 'show')->name('posts.show');
})->withoutMiddleware([Auth::class]);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
