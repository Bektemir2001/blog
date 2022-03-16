<?php

namespace App\Http\Controllers\User\Like;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = auth()->user()->likedPosts;
        return view('user.like.index', compact('posts'));   
    }
}
