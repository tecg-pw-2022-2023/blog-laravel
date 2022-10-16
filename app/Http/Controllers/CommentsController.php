<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StoreCommentRequest;

class CommentsController extends Controller
{
    public function store(StoreCommentRequest $request, Post $post)
    {
        $comment = $post->comments()->create([
            'body' => request('body'),
            'user_id' => auth()->id(),
        ]);
        return redirect('/posts/'.$post->slug.'/#'.$comment->id);
    }
}
