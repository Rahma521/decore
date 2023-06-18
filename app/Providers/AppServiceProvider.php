<?php

namespace App\Providers;


use App\Models\Cart;

use App\Models\Product;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function boot()
    {
        view()->composer('*',function($view)
        {
            $cartItems = Cart::all();
            $view->with('cartItems',  $cartItems);
        });

        view()->composer('*',function($view)
        {
            $products = Product::all();
            $view->with('products',  $products);
        });


    }
}
