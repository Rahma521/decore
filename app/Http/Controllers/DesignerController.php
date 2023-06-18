<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Models\Designer;
use Illuminate\Http\Request;

class DesignerController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    } 
    public function designerRegisterForm()
    {
        return view('designer-register');
    }
    public function designerCreate(UserRegisterRequest $request)
    {
        $data= $request->except('terms' , 'password');
        $data['terms'] = true;
        $data['password'] = bcrypt($request->password);
        $designer= Designer ::create($data);
        auth()->guard('designer')->login($designer);

        return redirect()->route('home');
    }
}
