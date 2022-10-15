<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class PostsFromAuthorController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  User $author
     * @return Application|Factory|View
     */
    public function __invoke(User $author)
    {
        $posts = $author->posts()->latest('published_at')->paginate(10);
        return view('author.index', compact('posts', 'author'));
    }
}
