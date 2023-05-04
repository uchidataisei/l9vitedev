<?php

use Illuminate\Support\Facades\Route;

// Auth::routes();

// Route::get('/folders/{id}/tasks', '\App\Http\Controllers\TaskController@index')->name('tasks.index');
// Route::get('/folders/create', '\App\Http\Controllers\FolderController@showCreateForm')->name('folders.create');
// Route::post('/folders/create', '\App\Http\Controllers\FolderController@create');
// Route::get('/folders/{id}/tasks/create', '\App\Http\Controllers\TaskController@showCreateForm')->name('tasks.create');
// Route::post('/folders/{id}/tasks/create', '\App\Http\Controllers\TaskController@create');
// Route::get('/folders/{id}/tasks/{task_id}/edit', '\App\Http\TaskController@showEditForm')->name('tasks.edit');
// Route::post('/folders/{id}/tasks/{task_id}/edit', '\App\Http\TaskController@edit');
// Route::get('/', '\App\Http\Controllers\HomeController@index')->name('home');

#課題

use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'home']);
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts/{post}/like', [PostController::class, 'like'])->name('posts.like');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
