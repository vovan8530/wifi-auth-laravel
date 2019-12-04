<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($key)
    {
        $users = User::query()->orderByDesc('created_at')->get();
        return view('admin.users',  compact('users', 'key'));
    }
}
