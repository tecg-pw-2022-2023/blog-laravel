<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class UncategorizedPostsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request)
    {
        $posts = Post::doesnthave('categories')->latest('published_at')->paginate(10);
        return view('category.index', compact('posts'));
    }
}
