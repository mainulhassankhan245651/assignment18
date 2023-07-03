<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/allposts', [PostController::class, 'allposts'])->name('allposts.view');
Route::get('/categories/{id}/posts', [CategoryController::class, 'getPosts'])->name('categories.posts');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.delete');



