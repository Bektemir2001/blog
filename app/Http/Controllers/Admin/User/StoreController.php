<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Mail\User\PasswordMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $date = $request->validated();
        $password = Str::random(10);
        $date['password'] = Hash::make($password);
        $user = User::firstOrCreate($date);
        Mail::to($date['email'])->send(new PasswordMail($password));
        event(new Registered($user));
        return redirect()->route('admin.users.index');
    }
}
