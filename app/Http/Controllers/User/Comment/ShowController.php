<?php

namespace App\Http\Controllers\User\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Comment $comment)
    {
        $post = $comment->comentedPosts;

        $category = $post->category;
        $tag = $post->tags;
        return view('user.comment.show', compact('post', 'comment', 'category', 'tag'));
    }
}
