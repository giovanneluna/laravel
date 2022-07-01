<?php

use App\Http\Controllers\{
    Controller,
    UserController
};
use App\Http\Controllers\Admin\CommentController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
Route::get('/users/{id}/comments/create',[CommentController::class,'create'])->name('comments.create');
Route::get('/users/{user}/comments/{id}',[CommentController::class,'edit'])->name('comments.edit');
Route::put('/comments/{id}',[CommentController::class,'update'])->name('comments.update');
Route::post('/users/{id}/comments',[CommentController::class,'store'])->name('comments.store');
Route::get('/users/{id}/comments',[CommentController::class,'index'])->name('comments.index');

Route::get('/users/create',[UserController::class, 'create'])->name('users.create');
Route::put('/users/{id}',[UserController::class, 'update'])->name('users.update');
Route::get('/users{id}/edit',[UserController::class, 'edit'])->name('users.edit');
Route::get('/users',[UserController::class, 'index'])->name('users.index');
Route::post('/users',[UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');


Route::get('/', function () {
    return view('welcome');
});
