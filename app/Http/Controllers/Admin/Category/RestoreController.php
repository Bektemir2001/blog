<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class RestoreController extends Controller
{
    public function __invoke($category_id)
    {
        Category::where("id", $category_id)->restore();
        return redirect()->route('admin.categories.index');
    }
}
