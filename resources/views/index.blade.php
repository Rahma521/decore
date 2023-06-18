
@extends('layouts.decoreApp')
@section('content')
<header>
    <div class="header">
        <div class="container">
            <!-- start top bar -->
            @include('includes.header')
            <!-- end top bar-->

            <!-- start sub_header  -->
            @include('includes.sub_header')
            <!-- end sub_header -->
        </div>
        @include('includes.side_menu')
    </div>
</header>
<!-- start aboutus_index    -->
<div class="aboutus_index">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img_about_index">
                    <!-- img bg  -->
                    <div class="img-bg-aboutus_index">
                        <img src="{{ asset('images/ia1.png') }}" alt="">
                    </div>
                    <!-- ----- -->
                    <div class="sub_img_about_index">
                        <!-- img top -->
                        <div class="over_img_about_index" data-aos="fade-down" data-aos-easing="linear"
                            data-aos-duration="900">
                            <img src="{{ asset('images/ia2.png') }}" alt="">
                        </div>
                        <!-- ----- -->
                        <!-- img bottom -->
                        <div class="over_img_about_index" data-aos="fade-up" data-aos-easing="linear"
                            data-aos-duration="700">
                            <img src="{{ asset('images/ia3.png') }}" alt="">
                        </div>
                        <!-- ----- -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text_about_index">
                    <div class="title">
                        <h2> من نحن </h2>
                        <span>من نحن</span>
                    </div>
                    <div class="sub_text_about_index">
                        <p> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                            التى يولدها التطبيق.إذا كنت تحتاج
                            : إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد </p>
                        <ul>
                            <li> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة . </li>
                            <li> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</li>
                            <li> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</li>
                            <li> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</li>
                            <li> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</li>
                        </ul>
                        <div class="btn_about_index">
                            <a href="about.html" class="ctm-btn2"> <span> اقرأ المزيد </span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end aboutus_index -->

<!-- start prodect_index  -->
<div class="prodect_index">
    <!-- start title2 == -->
    <div class="title2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <lottie-player class="lottie2" src="{{ asset('images_json/data1.json') }}" speed="1" loop autoplay></lottie-player>
                    <h2> أحدث تصميماتنا</h2>
                    <lottie-player class="lottie2" src="{{ asset('images_json/data1.json') }}" speed="1" loop autoplay></lottie-player>
                </div>
            </div>
        </div>
    </div>
    <!-- start title2 == -->
    <div class="tabs_index">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab1" data-toggle="pill" href="#pills-home1" role="tab"
                    aria-controls="pills-home1" aria-selected="true">غرف معيشة </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="false"> صالات </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                    aria-controls="pills-contact" aria-selected="false"> المطابخ </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">غرف نوم</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab1" data-toggle="pill" href="#pills-contact1" role="tab"
                    aria-controls="pills-contact1" aria-selected="false"> الحمامات</a>
            </li>
        </ul>
    </div>
    <div class="sub_tabs">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home1" role="tabpanel" aria-labelledby="pills-home-tab1">
                <div class="main_sub_tabs">
                    <div class="container">
                        <div class="row">
                            @foreach ($products as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <!-- start sub_prodect_index-->
                                <div class="sub_prodect_index">
                                    <div class="img_prodect_index">
                                        <div class="owl-carousel owl-theme slider-1" id="slider-1">
                                            <!--start item -->
                                            <div class="item">
                                                <div class="sub_img_prodect_index">
                                                    <img src="{{ asset('images/p1.png') }}" alt="">
                                                </div>
                                            </div>
                                            <!-- end item -->
                                            <!--start item -->
                                            <div class="item">
                                                <div class="sub_img_prodect_index">
                                                    <img src="{{ asset('images/p2.png') }}" alt="">
                                                </div>
                                            </div>
                                            <!-- end item -->
                                            <!--start item -->
                                            <div class="item">
                                                <div class="sub_img_prodect_index">
                                                    <img src="{{ asset('images/p2.png') }}" alt="">
                                                </div>
                                            </div>
                                            <!-- end item -->
                                        </div>
                                        <div class="new">
                                            <span> جديد </span>
                                        </div>
                                        <div class="links_sub_prodect_index">
                                            <ul>
                                                <li><a href="{{route('details',$product->id)}}"> <i class="bi bi-eye-fill"></i> </a>
                                                </li>
                                                <li>
                                                    <form action="">
                                                        <input type="checkbox" id="clicks" name="">
                                                        <label for="clicks"> <i class="far fa-heart"></i></label>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text_sub_prodect_index">
                                        <div class="rate">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <h2>{{$product->product_name}}</h2>
                                        <p>{{$product->product_price}} رس</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-lg-12">
                                <div class="btn1_prodect_index">
                                    <a href="" class="ctm-btn2"> <span> المزيد </span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            </div>
            <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact-tab1">
            </div>
        </div>
    </div>
</div>
<!-- end prodect_index ==========
==========================
============== -->

<!-- start designers ====
==============
===== -->

<div class="designers_index">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="img_designers_index">
                    <div class="sub_img_designers_index" style="background-image: url({{ asset('images/d1.png') }});">
                        <div class="text_img_designers_index">
                            <img src="{{ asset('images/b4.png') }}" alt="">
                            <div class="sub_text_img_designers_index">
                                <h2> المصممين</h2>
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة
                                    . لقد تم توليد هذا النص من مولد النص العربى </p>

                                <div class="btn_designers_index">
                                    <a href=""> المزيد </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="bg_img_designers_index">
                        <img src="{{ asset('images/bg1.png') }}" alt="">
                    </div>
                </div>
            </div>


            <div class="col-lg-5 col-md-12 row pg_none main_designers_index">
                <div class="col-lg-6 col-md-6 col-sm-6  col-6">
                    <div class="sub_designers_index">
                        <div class="img_main_designers_index">
                            <img src="{{ asset('images/d3.png') }}" alt="">
                        </div>
                        <div class="text_main_designers_index">
                            <h2> اسم المصمم</h2>
                            <p> مدير مساعد</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6  col-6">
                    <div class="sub_designers_index">
                        <div class="img_main_designers_index">
                            <img src="{{ asset('images/d4.png') }}" alt="">
                        </div>
                        <div class="text_main_designers_index">
                            <h2> اسم المصمم</h2>
                            <p> مدير مساعد</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-6  col-6">
                    <div class="sub_designers_index">
                        <div class="img_main_designers_index">
                            <img src="{{ asset('images/d5.png') }}" alt="">
                        </div>
                        <div class="text_main_designers_index">
                            <h2> اسم المصمم</h2>
                            <p> مدير مساعد</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-6  col-6">
                    <div class="sub_designers_index">
                        <div class="img_main_designers_index">
                            <img src="{{ asset('images/d2.png') }}" alt="">
                        </div>
                        <div class="text_main_designers_index">
                            <h2> اسم المصمم</h2>
                            <p> مدير مساعد</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="bg_designers_index">
            <img src="images/bg3.png" alt="">
        </div>
    </div>
</div>

<!-- end designers ====
==============
===== -->

<!-- start showrooms_index =====
================
======= -->
<div class="showrooms_index">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title">
                    <h2> المعارض </h2>
                    <span>المعارض </span>
                </div>
            </div>
            <div class="col-lg-12 pg_none">
                <div class="owl-carousel owl-theme" id="slider_1">
                    <!--start item -->
                    <div class="item">
                        <div class="sub_showrooms_index">
                            <div class="row pg_none">

                                <div class="col-lg-6 col-md-12">
                                    <div class="img_showrooms_index" style="background-image: url({{ asset('images/s1.png') }});">
                                        <div class="text_showrooms_index">
                                            <h2> المطابخ</h2>
                                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في
                                                نفس المساحة، لقد تم توليد هذا النص من
                                                مولد النص العربى .</p>
                                            <div class="btn_showrooms_index">
                                                <a href="" class=""> المزيد </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-12 pg_none row img_samil_showrooms_index">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="img_showrooms_index" style="background-image: url({{ asset('images/s2.png') }});">
                                            <div class="text_showrooms_index">
                                                <h2> الحمامات</h2>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في
                                                    نفس المساحة، لقد تم توليد هذا النص من
                                                    مولد النص العربى .</p>
                                                <div class="btn_showrooms_index">
                                                    <a href="" class=""> المزيد </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6  col-6">
                                        <div class="img_showrooms_index" style="background-image: url({{ asset('images/s3.png') }});">
                                            <div class="text_showrooms_index">
                                                <h2> غرف نوم</h2>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في
                                                    نفس المساحة، لقد تم توليد هذا النص من
                                                    مولد النص العربى .</p>
                                                <div class="btn_showrooms_index">
                                                    <a href="" class=""> المزيد </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="img_showrooms_index" style="background-image: url({{ asset('images/s4.png') }});">
                                            <div class="text_showrooms_index">
                                                <h2> غرف معيشة</h2>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في
                                                    نفس المساحة، لقد تم توليد هذا النص من
                                                    مولد النص العربى .</p>
                                                <div class="btn_showrooms_index">
                                                    <a href="" class=""> المزيد </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end item -->

                    <!--start item -->
                    <div class="item">
                        <div class="sub_showrooms_index">
                            <div class="row pg_none">

                                <div class="col-lg-6  col-md-12">
                                    <div class="img_showrooms_index" style="background-image: url({{ asset('images/s1.png') }});">
                                        <div class="text_showrooms_index">
                                            <h2> المطابخ</h2>
                                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في
                                                نفس المساحة، لقد تم توليد هذا النص من
                                                مولد النص العربى .</p>
                                            <div class="btn_showrooms_index">
                                                <a href=""> المزيد </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6  col-md-12 pg_none row img_samil_showrooms_index">
                                    <div class="col-lg-6  col-md-6 col-sm-6  col-6">
                                        <div class="img_showrooms_index" style="background-image: url({{ asset('images/s2.png') }});">
                                            <div class="text_showrooms_index">
                                                <h2> الحمامات</h2>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في
                                                    نفس المساحة، لقد تم توليد هذا النص من
                                                    مولد النص العربى .</p>
                                                <div class="btn_showrooms_index">
                                                    <a href=""> المزيد </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6  col-md-6 col-sm-6  col-6">
                                        <div class="img_showrooms_index" style="background-image: url({{ asset('images/s3.png') }});">
                                            <div class="text_showrooms_index">
                                                <h2> غرف نوم</h2>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في
                                                    نفس المساحة، لقد تم توليد هذا النص من
                                                    مولد النص العربى .</p>
                                                <div class="btn_showrooms_index">
                                                    <a href=""> المزيد </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="img_showrooms_index" style="background-image: url({{ asset('images/s4.png') }});">
                                            <div class="text_showrooms_index">
                                                <h2> غرف معيشة</h2>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في
                                                    نفس المساحة، لقد تم توليد هذا النص من
                                                    مولد النص العربى .</p>
                                                <div class="btn_showrooms_index">
                                                    <a href=""> المزيد </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                    <!--start item -->
                    <div class="item">
                        <div class="sub_showrooms_index">
                            <div class="row pg_none">

                                <div class="col-lg-6  col-md-12 ">
                                    <div class="img_showrooms_index" style="background-image: url({{ asset('images/s1.png') }});">
                                        <div class="text_showrooms_index">
                                            <h2> المطابخ</h2>
                                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في
                                                نفس المساحة، لقد تم توليد هذا النص من
                                                مولد النص العربى .</p>
                                            <div class="btn_showrooms_index">
                                                <a href=""> المزيد </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6  col-md-12 pg_none row img_samil_showrooms_index">
                                    <div class="col-lg-6 col-md-6 col-sm-6  col-6">
                                        <div class="img_showrooms_index" style="background-image: url({{ asset('images/s2.png') }});">
                                            <div class="text_showrooms_index">
                                                <h2> الحمامات</h2>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في
                                                    نفس المساحة، لقد تم توليد هذا النص من
                                                    مولد النص العربى .</p>
                                                <div class="btn_showrooms_index">
                                                    <a href=""> المزيد </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6  col-md-6 col-sm-6  col-6">
                                        <div class="img_showrooms_index" style="background-image: url({{ asset('images/s3.png') }});">
                                            <div class="text_showrooms_index">
                                                <h2> غرف نوم</h2>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في
                                                    نفس المساحة، لقد تم توليد هذا النص من
                                                    مولد النص العربى .</p>
                                                <div class="btn_showrooms_index">
                                                    <a href=""> المزيد </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="img_showrooms_index" style="background-image: url({{ asset('images/s4.png') }});">
                                            <div class="text_showrooms_index">
                                                <h2> غرف معيشة</h2>
                                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في
                                                    نفس المساحة، لقد تم توليد هذا النص من
                                                    مولد النص العربى .</p>
                                                <div class="btn_showrooms_index">
                                                    <a href=""> المزيد </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->

                </div>

            </div>
        </div>
    </div>
</div>

<!-- end showrooms_index =====
================
======= -->
<div class="comments">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sub_comments">
                    <div class="owl-carousel owl-theme" id="slider_2">
                        <!--start item -->
                        <div class="item">
                            <div class="sub-slider_comments">
                                <div class="img_slider_comments">
                                    <img src="{{ asset('images/img3.png') }}" alt="">
                                </div>
                                <div class="text_slider_comments">
                                    <h2>اسم المستخدم</h2>
                                    <span> username@gmail.com</span>
                                    <div class="p_slider_comments">
                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                            مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                            إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.إذا كنت تحتاج إلى عدد أكبر من
                                            الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو
                                            مقسما حقيقية لتصميم الموقع.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END item -->

                        <!--start item -->
                        <div class="item">
                            <div class="sub-slider_comments">
                                <div class="img_slider_comments">
                                    <img src="{{ asset('images/img3.png') }}" alt="">
                                </div>
                                <div class="text_slider_comments">
                                    <h2>اسم المستخدم</h2>
                                    <span> username@gmail.com</span>
                                    <div class="p_slider_comments">
                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                            مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                            إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.إذا كنت تحتاج إلى عدد أكبر من
                                            الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو
                                            مقسما حقيقية لتصميم الموقع.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END item -->

                        <!--start item -->
                        <div class="item">
                            <div class="sub-slider_comments">
                                <div class="img_slider_comments">
                                    <img src="{{ asset('images/img3.png') }}" alt="">
                                </div>
                                <div class="text_slider_comments">
                                    <h2>اسم المستخدم</h2>
                                    <span> username@gmail.com</span>
                                    <div class="p_slider_comments">
                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                            مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                            إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.إذا كنت تحتاج إلى عدد أكبر من
                                            الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو
                                            مقسما حقيقية لتصميم الموقع.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END item -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="img_comment_index_ov">
        <img src="{{ asset('images/212.png') }}" alt="">
    </div>
</div>


@endsection