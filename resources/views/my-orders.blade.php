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
            <div class="banner_header" style="background-image: url(images/ap1.jpg);">
                <div class="container">
                    <div class="text_banner_header">
                        <h2> طلباتي </h2>
                        <p>سجل الطلبات </p>
                        <img src="images/l4.png" alt="">
                    </div>
                </div>
            </div>
            <!-- end banner_header -->
            <div class="links_pages">
                <p> <a href="{{ route('home') }}"> الرئيسية</a> <i class="bi bi-chevron-left"></i> <a
                        href="acount.html">
                        حسابي</a> <i class="bi bi-chevron-left"></i> <span> طلباتي </span> </p>
            </div>
        </div>
    </div>
</header>
<!-- end header -->
<!-- start title2 -->
<div class="title2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <lottie-player class="lottie2" src="images_json/data1.json" speed="1" loop autoplay></lottie-player>
                <h2> طلباتي </h2>
                <lottie-player class="lottie2" src="images_json/data1.json" speed="1" loop autoplay></lottie-player>
            </div>
        </div>
    </div>
</div>
<!-- start title2 == -->
<div class="my_order">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="taps_my_order">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab1" data-toggle="pill" href="#pills-home1"
                                role="tab" aria-controls="pills-home1" aria-selected="true">الحالية </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                aria-controls="pills-home" aria-selected="false"> السابقة </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                @foreach($orders as $order)
                    <div class="sub_taps_my_order">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home1" role="tabpanel"
                                aria-labelledby="pills-home-tab1">
                                <div class="main_sub_order">
                                    <div class="sub_my_order">
                                        @csrf
                                        <ul class="detlis_order">
                                            <li> <span> رقم الطلب</span>: </li>
                                            @foreach($order->orderItems as $item )
                                                @php$ordercount +=1 ;  @endphp
                                            @endforeach
                                            <li> <span> عدد الطلبات </span>{{ $ordercount }}:</li>
                                                @php$ordercount = 0 ;  @endphp
                                            <li> <span>المبلغ الإجمالي </span>: {{ $order->order_price }} رس</li>
                                        </ul>
                                        <div class="click_my_order">
                                            <span>قيد التصميم </span>
                                            <i class="bi bi-three-dots"></i>
                                        </div>
                                        <div class="prodect_my_order">
                                            <div class="sub_prodect_my_order">
                                                @foreach($order->orderItems as $orderItem)
                                                    <input type="hidden" name="order_item_id" id=""
                                                        value="{{ $orderItem->product->id }}">
                                                    <div class="img_prodect_my_order">
                                                        <img src="images/dr1.png" alt="">
                                                    </div>
                                                    <div class="text_prodect_my_order">
                                                        <h2> {{ $orderItem->product->product_name }}</h2>
                                                        <div class="rate">
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        {{-- <p> رس{{ $orderItem->quantity * $orderItem->product->product_price }}
                                                        </p> --}}
                                                        <h5> رس{{ $orderItem->quantity }}x
                                                            {{ $orderItem->product->product_price }}</h5>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
