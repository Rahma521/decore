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
                        <h2>  حسابي </h2>
                        <p>الحساب الخاص بك  </p>
                        <img src="images/l4.png" alt="">
                    </div>
                </div>
            </div>
            <!-- end banner_header -->
            <div class="links_pages">
                <p> <a href="index.html"> الرئيسية</a>  <i class="bi bi-chevron-left"></i>      <span>حسابي </span>  </p>
            </div>
        <div class="element" id="menu-div">
            <div class="language">
                 <span> <i class="bi bi-globe2"></i></span>
                 <ul>
                     <li><a href=""> ع</a></li>
                     <li class="acitve"><a href=""> EN</a></li>
                 </ul>
            </div>
            <div class="logo_mune">
                <a href="index.html">
                    <lottie-player class="lottie1" src="images_json/data.json"  speed="1"  loop autoplay></lottie-player>
                </a>
            </div>
            <form action="">
                <div class="search_header">
                   <input type="text" placeholder="ابحث هنا .." class="form-control">
                   <button> <i class="bi bi-search"></i></button>
                </div>
            </form>    
            <div class="sub_element">
                <ul>
                    <li><a href="index.html"> الرئيسية</a></li>
                    <li><a href="about.html"> من نحن</a></li>
                    <li><a href="acount.html"> حسابي</a></li>
                    <li><a href="new-products.html"> جديدنا</a></li>
                    <li><a href="sales.html"> تخفيضات</a></li>
                    <li><a href="showrooms.html"> المعارض</a></li>
                    <li><a href="designers.html"> المصممين</a></li>
                    <li><a href="contact.html"> تواصل معنا</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- end header  -->
<!-- start title2 == -->
<div class="title2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <lottie-player class="lottie2" src="images_json/data1.json"  speed="1"  loop autoplay></lottie-player>
                <h2> حسابي </h2>
                <lottie-player class="lottie2" src="images_json/data1.json"  speed="1"  loop autoplay></lottie-player>
            </div>
        </div>
    </div>
</div>
<!-- start title2 == -->
<div class="my-account">
    <div class="container">
        <div class="row justify-content-center">
            <!-- start main_img_uesr_account  -->
            <div class="col-lg-12">
                <div class="main_img_uesr_account">
                    <div class="img_uesr_account">
                        <img src="images/img023.png" alt="">
                    </div>
                    <div class="text_uesr_account">
                        <h2> اسم المستخدم</h2>
                        <span> username@gmail.com</span>
                    </div>
                </div>
            </div>
             <!-- end main_img_uesr_account  -->
            <div class="col-lg-10  col-md-12 col-sm-10 pg_none">
                <div class="links_acount">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <a href="profile.html" data-aos="flip-up">
                                <div class="sub_links_acount">
                                    <div class="img_links_acount">
                                        <img src="images/user.png" alt="">
                                    </div>
                                    <h2> البيانات الشخصية</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <a href="wishlist.html" data-aos="flip-up">
                                <div class="sub_links_acount">
                                    <div class="img_links_acount">
                                        <img src="images/heart.png" alt="">
                                    </div>

                                    <h2>المفضلة</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <a href="{{route('cartList')}}" data-aos="flip-up">
                                <div class="sub_links_acount">
                                    <div class="img_links_acount">
                                        <img src="images/bag (2).png" alt="">
                                    </div>
                                    <h2> عربة التسوق</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <a href="{{route('order')}}" data-aos="flip-up">
                                <div class="sub_links_acount">
                                    <div class="img_links_acount">
                                        <img src="images/to-do-list.png" alt="">
                                    </div>
                                    <h2> طلباتي</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <a href="" data-aos="flip-up">
                                <div class="sub_links_acount">
                                    <div class="img_links_acount">
                                        <img src="images/logout (8).png" alt="">
                                    </div>
                                    <h2>تسجيل خروج</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection