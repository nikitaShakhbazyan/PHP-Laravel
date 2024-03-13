<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register (Request $request) {
        $incomingFields = $request->validate([
            'name'=>['required','min:4','max:10'],
            'email' => ['required','email'],
            'password'=>['required','min:4','max:30']
        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        User::create($incomingFields);

        return 'Hi from controller';
    }
}
