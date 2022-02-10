<?php

use App\Http\Controllers\Autorize\{
    EditController,
    PostController,
    RecordController
};
use App\Http\Controllers\Comments\CommentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/buscar-por', [HomeController::class, 'search'])->name('search');
Route::get('/registro/{post:slug}', [PostController::class, 'show'])->name('show-post');

Route::middleware(['auth'])->group(function(){

    Route::post('/comentar/{category}', [CommentController::class, 'comment'])->name('comment-post');
    Route::delete('/comentar/excluir/{id}', [CommentController::class, 'deleteComment'])->name('comment-delete');
});

Route::middleware(['mod'])->group(function(){

    Route::get('/editar', [EditController::class, 'index'])->name('edit-records');
    Route::get('/editar/registro/{record:title}', [EditController::class, 'show'])->name('edit-records-show');
    Route::put('/editar/registro/update/{id}', [EditController::class, 'update'])->name('edit-records-update');    
});

Route::middleware(['admin'])->group(function(){

    Route::get('/criar-registro', [RecordController::class, 'index'])->name('create-record-index');
    Route::post('/criar-registro', [RecordController::class, 'store'])->name('create-records');
    Route::view('/criar-post','Admin.create-post')->name('create-post-index');
    Route::post('/criar-post', [PostController::class, 'store'])->name('create-posts');
    Route::delete('/excluir-registro/{id}', [RecordController::class, 'delete'])->name('record-delete');
});