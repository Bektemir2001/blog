<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class RestoreController extends Controller
{
    public function __invoke($tag_id)
    {
        Tag::where("id", $tag_id)->restore();
        return redirect()->route('admin.tags.index');
    }
}
