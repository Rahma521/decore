<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index',compact('products'));
    }
    public function myAccount()
    {
        return view('account');
    }
}
