<?php

namespace App\Http\Controllers;

use App\Models\Cart;

// use Cart;
use App\Models\Product;
use Auth;
use DB;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartList()
    {
         if (auth()->user()) 
        {
            $totalPrice = 0;
            $orderNo = random_int(1000, 9999);
            $products = Product::all();
            return view('cart', compact('products','totalPrice','orderNo'));
            
        }
        if (!auth()->user()) 
        {
            return redirect()->route('loginForm');
        }

        //////using Darry/////
        // if (auth()->guard('designer')->user())
        // {
        //     $cartItems = Cart::getContent();
        //     $cartTotal = Cart::getTotal();
        //     return view('cart', compact('cartItems','cartTotal'));
        // }
        // if (auth()->guard('showroom')->user())
        // {
        //     $cartItems = Cart::getContent();
        //     $cartTotal = Cart::getTotal();
        //     return view('cart', compact('cartItems','cartTotal'));
        // }
        // if (auth()->user()) 
        // {
        //     $cartItems = Cart::getContent();
        //     $cartTotal = Cart::getTotal();
        //     return view('cart', compact('cartItems','cartTotal'));
        // }
        // if (!auth()->user()) 
        // {
        //     return redirect()->route('loginForm');
        // }

    }
    public function addToCart(Request $request, $id )
    {
        // dd($request->all());
        $product = Product::find($id);
        $itemCheck = Cart::where('product_id',$product->id)->first();

        if (isset($itemCheck)) 
        {
            $itemCheck->update([
                'quantity' => $request->input('quantity'),
             ]);
             $cartContentList = view('includes.cartCard', ['cartItems' => Cart::all()])->render();
                             
             return response()->json(array(
                     'status' => 200,
                     'message' => "added successfully ",
                     'cartContentList' => $cartContentList,
                 ));
        }
        else
        {
      
            $cartItem = Cart::create([
                    
                'product_id' =>$id,
                'quantity' =>$request->input('quantity'),
            ]);

            $cartTotal = $cartItem->quantity * $product->product_price;

            $cartContentList = view('includes.cartCard', ['cartItems' => Cart::all()])->render();
                
            return response()->json(array(
                    'status' => 200,
                    'message' => "added successfully ",
                    'cartContentList' => $cartContentList,
                    'cartTotal'=> $cartTotal, 
                ));
        }
        //////using Darry/////
 
        // $item = Item::find($id);
        // $cartItem = Cart::add(array(
        //     'id'=>$item->id,
        //     'name'=>$item->item_name,
        //     'price'=>$item->item_price,
        //     'quantity'=>$request->input('quantity'),
        // ));
        // $cartContentList = view('includes.cartCard', ['cartItems' => Cart::getContent()])->render();
        // $cartTotal = Cart::getTotal();
        // return response()->json(array(
        //     'status' => 200,
        //     'message' => "added successfully ",
        //     'cartContentList' => $cartContentList,
        //     'cartTotal'=> $cartTotal,  
        // ));
        
    }
    public function updateCartInc(Request $request, $id)
    {
        $product = Product::find($id);
    
        $cartItem = DB::table('carts')
                    ->where('product_id', $id)
                    ->update(['quantity' => DB::raw('quantity+1')
                ]);

        $cartItem = Cart::where('product_id', $id);
        $cartincrement =  $product->product_price;
 
        return response()->json(array(
                    'status' => 200,
                    'message' => " incremented ",
                    'cartincrement'=> $cartincrement, 
               ));
         //////using Darry/////
    //     $item = Item::find($id);
    //     Cart::update($id,array(
    //         'quantity' => +1, 
    //     ));
        
    //     $cartTotal = Cart::getTotal();
    //    return response()->json(array(
    //         'status' => 200,
    //         'message' => " incremented ",
    //         'cartTotal'=> $cartTotal, 
    //    ));
    }
    public function updateCartDec(Request $request, $id)
    {
        $product = Product::find($id);
        $cartItem = DB::table('carts')
                    ->where('product_id', $id)
                    ->update(['quantity' => DB::raw('quantity-1')]);
        if (DB::table('carts')
        ->where('product_id', $id)
        ->sum('quantity')<=0)
        {
            $cartItem = DB::table('carts')
            ->where('product_id', $id)
            ->update(['quantity' => 1]);
        }

        $cartItem = Cart::where('product_id', $id);
        $cartdecrement =  $product->product_price;
    
        return response()->json(array(
                    'status' => 200,
                    'message' => " decremented ",
                    'cartdecrement'=> $cartdecrement, 
               ));
               //////using Darry/////
    //     $item = Item::find($id);
    //     Cart::update($id,array(
    //         'quantity' => -1, 
    //     ));
    //     $cartTotal = Cart::getTotal();
    //    return response()->json(array(
    //         'status' => 200,
    //         'message' => "decremented ",
    //         'cartTotal'=> $cartTotal, 
    //    ));
    }
    public function removeCart(Request $request, $id)
    {
       
        $cartQuantity = Cart::where('product_id', $id)->sum('quantity');
        $cartPrice = Product::where('id', $id)->sum('product_price');

        $cartItemTotal = $cartQuantity * $cartPrice;
        //dd( $cartItemTotal);
        $cart= Cart::where('product_id', $id)->delete();
        return response()->json(array(
            'status' => 200,
            'message' => "removed successfully ",
            'cartItemTotal' => $cartItemTotal
        ));

        //////using Darry/////      
        // $item = Item::find($id);
        // $cartTotal = Cart::getTotal();
        // $removedItem = Cart::remove($item->id);
        // if ($removedItem) 
        // {
        //     $cartTotal = Cart::getTotal();
        //     return response()->json(array(
        //         'status' => 200,
        //         'message' => "removed successfully ",
        //         'cartTotal'=> $cartTotal,  
        //     ));
        // } 
        // else 
        // {
        //     return redirect()->back();
        // }

    }

}
