<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get(
    '/',
    function () {
        return view('posts', ['posts' => Post::with('category')->with('user')->get()]);
    }
)->name('home');

Route::get(
    '/post/{post:slug}',
    function (Post $post) {
        return view('post', ['post' => $post]);
    }
)->name('post-detail');

Route::get(
    '/categories/{category:slug}',
    function (Category $category) {
        return view('posts', ['posts' => $category->posts]);
    }
)->name('categories-posts');
