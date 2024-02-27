<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;

class UserController extends Controller
{
    public function index()
    {
        $users = User::find(2);

        return Inertia::render('Users', [
            'user' => $users,
            'title' => 'ola mundo',
        ]);
    }
}