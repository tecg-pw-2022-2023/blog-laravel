<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostsFromAuthorController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(User $author)
    {
        $posts = $author->posts()->latest('published_at')->paginate(10);
        return view('author.index', compact('posts', 'author'));
    }
}
