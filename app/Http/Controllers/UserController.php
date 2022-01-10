<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
 
        $user->load('links');

        return view('users.show', [
            'user' => $user,
        ]);
    }
}

