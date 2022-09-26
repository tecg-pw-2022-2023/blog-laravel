<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('posts', [PostController::class, 'index']);

Route::get('posts/{post}', function(Post $post){
    //return $post->load('comments');
    return $post->categories;
});
Route::get('categories/{category}', function(Category $category){
    //return $post->load('comments');
    return $category->posts;
});

Route::get('/users/{user:slug}', function (User $user) {
    return $user->email;
});











/*
Route::get('posts/{id}', function ($id) {
    return DB::table('posts')
        ->leftJoin('comments', 'posts.id', '=', 'comments.post_id')
        ->select('posts.id as pid','posts.body as pbody', 'comments.body as cbody')
        ->where('posts.id', $id)
        ->get();
});
*/
