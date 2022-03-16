<?php

namespace App\Http\Controllers\User\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Comment $comment)
    {
        return view('user.comment.edit', compact('comment'));
    }
}
