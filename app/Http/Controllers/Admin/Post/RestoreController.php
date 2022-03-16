<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Post;
use Illuminate\Http\Request;

class RestoreController extends BaseController
{
    public function __invoke($post_id)
    {
        Post::where("id", $post_id)->restore();
        return redirect()->route('admin.posts.index');
    }
}
