<?php

namespace App\Http\Controllers\User\Like;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Post $post)
    {
        auth()->user()->likedPosts()->detach($post->id);
        return redirect()->route('user.likes.index');
    }
}
