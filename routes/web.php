<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\GetController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentDetailController;
use App\Models\StudentDetail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/users/{user}', [UserController::class, 'show']);
// Route::get('/students', [StudentDetailController::class, 'index']);
// Route::get('/blogs', [BlogController::class,'index']);
// Route::get('/posts', [PostController::class,'index']);
// Route::get('/gets', [GetController::class,'index']);

Route::get('/students',[StudentDetailController::class,'index'])->name('students.index');
Route::get('/students/create',[StudentDetailController::class,'create'])->name('students.create');
Route::post('/students',[StudentDetailController::class,'store'])->name('students.store');
Route::get('/students/{student}',[StudentDetailController::class,'show'])->name('students.show');
Route::get('/students/{student}/edit',[StudentDetailController::class,'edit'])->name('students.edit');
Route::put('students/{student}',[StudentDetailController::class,'update'])->name('students.update');
Route::delete('/students/{student}',[StudentDetailController::class,'destroy'])->name('students.destroy');



Route::get('/posts',[StudentDetailController::class,'index'])->name('posts.index');
Route::get('posts/create',[StudentDetailController::class,'create'])->name('posts.create');
Route::post('posts',[StudentDetailController::class,'store'])->name('posts.store');
Route::get('posts/{post}',[StudentDetailController::class,'show'])->name('posts.show');
Route::get('posts/{post}/edit',[StudentDetailController::class,'edit'])->name('posts.edit');
Route::put('/posts/{post}',[StudentDetailController::class,'update'])->name('posts.update');
Route::delete('/posts/{post}',[StudentDetailController::class,'destroy'])->name('posts.destroy');



