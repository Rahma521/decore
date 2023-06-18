<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function itemDetails($id)
    {   
        $product = Product::find($id);
        if ($product) 
        {
            return view ('products-details',compact('product'));
        } else 
        {
            return redirect()->back();
        }
    }
    
}
