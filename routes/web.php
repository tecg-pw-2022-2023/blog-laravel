<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('welcome');
});

// Various posts indexes
Route::get('posts', [PostController::class, 'index']);
Route::get('categories/{category:slug}', PostsFromCategoryController::class);
Route::get('authors/{author:slug}', PostsFromAuthorController::class);

// Single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);











/*
Route::get('posts/{id}', function ($id) {
    return DB::table('posts')
        ->leftJoin('comments', 'posts.id', '=', 'comments.post_id')
        ->select('posts.id as pid','posts.body as pbody', 'comments.body as cbody')
        ->where('posts.id', $id)
        ->get();
});
*/
