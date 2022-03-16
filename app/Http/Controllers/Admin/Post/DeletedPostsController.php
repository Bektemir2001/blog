<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Post;
use Illuminate\Http\Request;

class DeletedPostsController extends BaseController
{
    public function __invoke()
    {
        $deleted_posts = Post::onlyTrashed()->get();
        return view('admin.post.deleted_posts', compact('deleted_posts'));
    }
}
