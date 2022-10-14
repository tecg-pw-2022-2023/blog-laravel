<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PostsFromCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Category $category)
    {
        $posts = $category->posts()->latest('published_at')->paginate(10);
        return view('category.index', compact('posts','category'));
    }
}
