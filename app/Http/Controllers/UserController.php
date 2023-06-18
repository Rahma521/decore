<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }   
    public function userRegisterForm()
    {
        return view('user-register');
    }
    public function userCreate(UserRegisterRequest $request)
    {
        //dd($request->all());
        $data= $request->except('terms' , 'password');
        $data['terms'] = true;
        $data['password'] = bcrypt($request->password);
        $user= User::create($data);
        auth()->login($user);

        return redirect()->route('home');
    }
}
