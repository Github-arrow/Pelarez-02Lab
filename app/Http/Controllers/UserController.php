<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function registration()
    {
        return view('registration');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'username'=>'required',
            'email'=>'required',
            'password'=>'required',
            'fullname',
        ]);
        user::create($data);
        return "User registration successful!";
    }
}
