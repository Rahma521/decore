<?php

namespace App\Http\Controllers;

use App\Models\Cart;

use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Product;
use Auth;

use DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function myOrder()
    {
        if (!auth()->user()) 
        {
            return redirect()->route('loginForm');
        }

        $products = Product::all();
        $orders = Order::all();
        $ordercount = 0;
       
        //$cartItemsNo = Cart::where('user_id',Auth::user()->id)->count();        
        return view('my-orders',compact('products','orders','ordercount'));

    }

    public function orderStore(Request $request)
    {
        //dd($request->all());
        $products = Product::all();
        $data = $request->except('order_price');
        $totalPrice = 0;

        foreach($products as $key =>$product)
        {
            foreach($product->cartItems as $cartItem)
            {
                $totalPrice += $cartItem->quantity * $product->product_price; 
            }

        }
       
        $data['order_price'] = $totalPrice;
        $order = Order::create($data);

        foreach($products as $key =>$product)
        {
            foreach($product->cartItems as $cartItem)
            {
                $orderItems = OrderItems::create([
                    'order_id'=>$order->id,
                    'product_id'=>$product->id,
                    'quantity'=>$cartItem->quantity,
                ]);
            }
        }
        
        DB::table('carts')->truncate();
        
        return redirect()->route('order');
    }
}
