<?php

namespace App\Http\Controllers\Post\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Comment\CommentRequest;
use App\Models\Comment;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(CommentRequest $request, Post $post)
    {
        $comment = $request->validated();
        $comment['post_id'] = $post->id;
        $comment['user_id'] = auth()->user()->id;
        Comment::create($comment);
        return redirect()->route('posts.show', $post->id);
    }
}
