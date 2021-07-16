<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NewsletterController;
use App\Services\Newsletter;

Route::get(
    '/',
    [
        PostController::class,
        'index',
    ]
)->name('home');

Route::get(
    '/post/{post:slug}',
    [
        PostController::class,
        'show',
    ]
)->name('post-detail');


Route::post('/posts/{post:slug}/comments', [CommentController::class, 'store']);
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/newsletter', NewsletterController::class);
