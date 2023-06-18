@extends('layouts.decoreApp')
@section('content')
<header>
    <div class="header">
        <div class="container">
            <!-- start top bar=-->
            @include('includes.header')
            <!-- end top bar-->
            @include('includes.side_menu')
            <!-- start banner_header -->
            <div class="banner_header"
                style="background-image: url({{ asset('images/ap1.jpg') }});">
                <div class="container">
                    <div class="text_banner_header">
                        <h2> عربة التسوق </h2>
                        <p>الحساب الخاص بك </p>
                        <img src="{{ asset('images/l4.png') }}" alt="">
                    </div>
                </div>
            </div>
            <!-- end banner_header-->
            <div class="links_pages">
                <p> <a href="{{ ROUTE('home') }}"> الرئيسية</a> <i class="bi bi-chevron-left"></i> <a
                        href="acount.html">
                        حسابي</a> <i class="bi bi-chevron-left"></i> <span>عربة التسوق </span> </p>
            </div>
        </div>
    </div>
</header>
<!-- end header -->
<!-- start title2 == -->
<div class="title2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <lottie-player class="lottie2" src="images_json/data1.json" speed="1" loop autoplay></lottie-player>
                <h2> عربة التسوق </h2>
                <lottie-player class="lottie2" src="images_json/data1.json" speed="1" loop autoplay></lottie-player>
            </div>
        </div>
    </div>
</div>
<!-- start title2 == -->
<!-- start cart_page -->
<div class="cart_page">
    <div class="container">
        <form action="{{ route('orderCreate') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-8">
                    <div class="title_cart_page">
                        <h2> المشتريات</h2>
                    </div>
                    <div class="sub_cart_page">
                        <ul>
                            @foreach($products as $key =>$product)
                                @foreach($product->cartItems as $cartItem)
                                    <input type="hidden" id="" value="{{ $product->id }}">
                                    <li class="deleteDiv{{ $product->id }}"></i>
                                        <div class="romve_cart_page">
                                            <button type="button" class="removeCart" value="{{ $product->id }}">
                                                <i class="bi bi-x-circle"></i>
                                            </button>
                                        </div>
                                        <div class="img_cart_page">
                                            <img src="images/cr1.png" alt="">
                                        </div>
                                        <div class="text_cart_page">
                                            <h2> {{ $product->product_name }}</h2>
                                            <div class="rate">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <p> رس{{ $cartItem->quantity }}x {{ $product->product_price }} </p>
                                            <h5 class="cartItemTotal">
                                                <li class="cart-Item-Total"
                                                    value="{{ $cartItem->quantity * $product->product_price }}">
                                                    {{ $cartItem->quantity * $product->product_price }} رس
                                                </li>
                                            </h5>
                                        </div>
                                            <button type="button" value="{{ $product->id }}" class="cartDecrement ctm-btn"><i
                                                    class="fa fa-minus"></i></button>
                                            <input type="text" name="quantity" id="updateQty" placeholder="الكمية"
                                                class="quantitiy form-control" value="{{ $cartItem->quantity }}" min="1">
                                            <button type="button" value="{{ $product->id }}" class="cartIncrement ctm-btn"><i
                                                    class="fa fa-plus"></i></button>
                                    <?php $totalPrice += $cartItem->quantity * $product->product_price ?>                              
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                <div class="btn_cart">
                    <a href="{{ route('home') }}" class="ctm-btn2"> متابعة التسوق</a>
                </div>
            </div>
    </div>
    <div class="col-lg-4">
        <div class="title_cart_page">
            <h2> إجمالي العربة</h2>
        </div>
        <div class="pries_cart_page">
            <div class="sub_pries_cart_page">
                <ul>
                    <li>
                        <h4>المبلغ الكلي : </h4>
                    <li class="cart-total" name="order_price" value="{{ $totalPrice }}"> {{ $totalPrice }} رس </li>
                    </li>
                </ul>
            </div>
        </div>
        <div class="btn_payment_methods">
            <button type="submit" class="clear ctm-btn"> إتمام الطلب </button>
        </div>
    </div>
    <input type="hidden" name="user_id" id="" value="{{ Auth::user()->id }}">
    <input type="hidden" name="user_name" id="" value="{{ Auth::user()->user_name }}">
    <input type="hidden" name="user_email" id="" value="{{ Auth::user()->email }}">
    <input type="hidden" name="user_phone" id="" value="{{ Auth::user()->phone }}">
    <input type="hidden" name="order_no" id="" value="{{ $orderNo }}">
    </form>
</div>
</div>
</div>
<!-- end cart_page -->
@endsection
