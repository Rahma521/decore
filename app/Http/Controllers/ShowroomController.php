<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Models\Showroom;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    } 
    public function showroomRegisterForm()
    {
        return view('showroom-register');
    }
    public function showroomCreate(UserRegisterRequest $request)
    {
        $data= $request->except('terms' , 'password');
        $data['terms'] = true;
        $data['password'] = bcrypt($request->password);
        $showroom= Showroom ::create($data);
        auth()->guard('showroom')->login($showroom);

        return redirect()->route('home');
    }
}
