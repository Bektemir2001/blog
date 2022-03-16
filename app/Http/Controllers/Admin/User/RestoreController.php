<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RestoreController extends Controller
{
    public function __invoke($user_id)
    {
        User::where("id", $user_id)->restore();
        return redirect()->route('admin.users.index');
    }
}
