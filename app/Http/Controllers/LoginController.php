<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function loginAs()
    {
        return view('login-as');
    }
    public function loginForm()
    {
        return view('login-for-all');
    }
    public function Login(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:8'
        ]);
        
        if (Auth::guard('designer')->attempt(['email' => $request->email, 'password' => $request->password])) 
        {
            return redirect()->route('index');
        }
        elseif (Auth::guard('showroom')->attempt(['email' => $request->email, 'password' => $request->password])) 
        {
            return redirect()->route('index');
        }
        elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password])) 
        {
            return redirect()->route('home');
        }
        else
        {
            return redirect()->route('loginForm')->withErrors(trans('auth.failed'));
        }
    }

    public function Logout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect()->route('loginForm');
    }
}
