<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DeletedCategoriesController extends Controller
{
    public function __invoke()
    {
        $deleted_categories = Category::onlyTrashed()->get();
        return view('admin.category.deleted_categories', compact('deleted_categories'));
    }
}
