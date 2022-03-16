<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class DeletedTagsController extends Controller
{
    public function __invoke()
    {
        $deleted_tags = Tag::onlyTrashed()->get();
        return view('admin.tag.deleted_tags', compact('deleted_tags'));
    }
}
