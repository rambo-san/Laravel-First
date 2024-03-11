<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function register(Request $request){
        $IncomingFields = $request -> validate([
            'username' => ['required', 'min:4', 'max:20'],
            'email' => 'required',
            'password' => 'required'
        ]);
        User::create($IncomingFields);
    }
}
