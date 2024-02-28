<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;


class UserController extends Controller
{
    public function index()
    {
        $users = User::find(2);

        return Inertia::render('Users', [
            'user' => Auth::user(),
            'title' => 'ola mundo',
        ]);
    }

    public function store(Request $request)
    {
       $user =  User::create($request->validate([
          'name' => ['required', 'max:50'],
          'email' => ['required', 'max:50', 'email','unique:users,email'],
          'password'=> ['required','min:4'],
        ]));
        Auth::login($user);
        return to_route('users.index');
    }
}