<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function checkLogin(Request $request)
    { 
        $user = User::where('email', $request->email)->first();
        if($user && $request->password == $user->password && $user->role == 1)
        {
            Auth::login($user);
            if(Auth::check())
            {
                return redirect()->route('product_index');
            }
        }
        elseif($user && $request->password == $user->password && $user->role == 0)
        {
            Auth::login($user);
            if(Auth::check())
            {
                return redirect()->route('customer.index');
            }
        }
        dd(Auth::user());


        // if (Auth::attempt($request->only('email', 'password'))) {
        //     return redirect()->route('index');
        // } else {
        //     dd(Auth::user());
        // }
    }
    
}
