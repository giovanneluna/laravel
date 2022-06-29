<?php

use App\Http\Controllers\{
    Controller,
    UserController
};
use App\Http\Controllers\Admin\CommentController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/users/{id}/comments',[CommentController::class,'index'])->name('comments.index');

Route::put('/users/{id}',[UserController::class, 'update'])->name('users.update');
Route::get('/users{id}/edit',[UserController::class, 'edit'])->name('users.edit');
Route::get('/users',[UserController::class, 'index'])->name('users.index');
Route::get('/users/create',[UserController::class, 'create'])->name('users.create');
Route::post('/users',[UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');


Route::get('/', function () {
    return view('welcome');
});
