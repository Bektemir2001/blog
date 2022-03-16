<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DeletedUsersController extends Controller
{
    public function __invoke()
    {
        $deleted_users = User::onlyTrashed()->get();
        return view('admin.user.deleted_users', compact('deleted_users'));
    }
}
