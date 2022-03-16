<?php

namespace App\Http\Controllers\User\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Comment\CommentRequest;
use App\Models\Comment;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(CommentRequest $request, Comment $comment)
    {
        $newComment = $request->validated();
        $comment->update($newComment);
        return redirect()->route('user.comments.index');
    }
}
