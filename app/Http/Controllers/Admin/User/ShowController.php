<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(User $user)
    {
        $roles = User::getRoles();
        if ($user->role){
            $role = $roles[$user->role];
        }
        else{
            $role = 0;
        }
        
        return view('admin.user.show', compact('user', 'role'));
    }
}
