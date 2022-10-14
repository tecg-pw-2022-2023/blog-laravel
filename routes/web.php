<?php

use App\Http\Controllers\UncategorizedPostsController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsFromAuthorController;
use App\Http\Controllers\PostsFromCategoryController;

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

// Various posts indexes
Route::get('/', [PostController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/categories/uncategorized', UncategorizedPostsController::class);
Route::get('/categories/{category:slug}', PostsFromCategoryController::class);
Route::get('/authors/{author:slug}', PostsFromAuthorController::class);

// Single post
Route::post('/posts', [PostController::class, 'store'])->middleware('auth')->can('create', \App\Models\Post::class);
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth')->can('create',
    \App\Models\Post::class);
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('single-post');

// Auth
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth');










/*
Route::get('posts/{id}', function ($id) {
    return DB::table('posts')
        ->leftJoin('comments', 'posts.id', '=', 'comments.post_id')
        ->select('posts.id as pid','posts.body as pbody', 'comments.body as cbody')
        ->where('posts.id', $id)
        ->get();
});
*/
