@extends('layouts.decoreApp')
@section('content')
<header>
    <div class="header">
        <div class="container">
            <!-- start top bar=-->
            @include('includes.header')
            <!-- end top bar-->
            <!-- start banner_header -->
        <div class="banner_header" style="background-image: url({{ asset('images/ap1.jpg') }});">
            <div class="container">
                <div class="text_banner_header">
                    <h2> تفاصيل المنتج </h2>
                    <p>معارض المطابخ </p>
                    <img src="{{ asset('images/l4.png') }}" alt="">
                </div>
            </div>
        </div>
        <!-- end banner_header -->
        <div class="links_pages">
            <p> <a href="index.html"> الرئيسية</a>  <i class="bi bi-chevron-left"></i>   <a href="showrooms.html"> المعارض</a> <i class="bi bi-chevron-left"></i>  <a href="showroom-products.html">  اسم المعرض</a> <i class="bi bi-chevron-left"></i>  <span> تفاصيل المنتج</span>  </p>
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
                    <lottie-player class="lottie1" src="{{ asset('images_json/data.json') }}"  speed="1"  loop autoplay></lottie-player>
                </a>
            </div>
            <form action="">
                <div class="search_header">
                   <input type="text" placeholder="ابحث هنا .." class="form-control">
                   <button> <i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</header>
<!-- end header -->
<div class="prodect-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- start slider prodect-details  -->
                <div class="slider-prodect-details">
                    <section class="services-slider">
                        <div class="main-container">
                            <div class="slider slider-main">
                                <div class="img-slider">
                                    <img src="{{ asset('images/s05.png') }}" alt="">
                                </div>       
                            </div>
                        </div>
                        <div class="nav-container">
                            <div class="slider-nav">
                                <div class="img-slider1">
                                    <img src="{{ asset('images/p1.png') }} " alt="">
                                </div>            
                                <div class="img-slider1">
                                    <img src="{{ asset('images/s03.png') }}" alt="">
                                </div>                       
                                <div class="img-slider1">
                                    <img src="{{ asset('images/s04.png') }}" alt="">
                                </div>                               
                                <div class="img-slider1">
                                    <img src="{{ asset('images/s05.png') }}" alt="">
                                </div>                               
                            </div>
                        </div>
                    </section>
                </div>
                <!-- end slider prodect-details  -->
            </div>
            <div class="col-lg-6"> 
                <div class="text_prodect_details">
                    <div class="sub_text_prodect_details">
                        <h2> {{$product->product_name}}</h2>
                        <span> {{$product->product_price}} رس </span>
                       <div class="heart_prodect_details">
                            <form action="">
                                <input type="checkbox" id="clicks2" name="">
                                <label for="clicks2"> <i class="far fa-heart"></i></label>
                            </form>
                       </div>
                    </div>
                    <div class="rate_text_prodect_details">
                        <div class="rate">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                      </div>
                      <a href=""  data-target="#comment_products" data-toggle="modal"> ( قيم الآن   !) </a>
                      <p> {{$product->des}}</p>
                    </div>
                    <div class="colors_prodect_details">
                        <form action="">
                        <ul>
                            <li>
                                <input type="radio" id="colors1" name="colors">
                                <label for="colors1" style="background:#fff"></label>
                            </li>
                            <li>
                                <input type="radio" id="colors2" name="colors">
                                <label for="colors2"  style="background:#272525"></label>
                            </li>
                            <li>
                                <input type="radio" id="colors3" name="colors">
                                <label for="colors3" style="background:#BF9561"></label>
                            </li>
                        </ul>
                        </form>
                    </div>
                    <div class="quantity_prodect_details">
                        <div class="sub_prodect_details">
                            <input type="number"  name="quantity"   placeholder="الكمية" id="quantity" class="qty-val form-control" value="1" min="1">
                            <div class="btn_prodect_details">
                                <button  type='submit' class="addCart ctm-btn" value="{{ $product->id }}"> إضافة إلى عربة التسوق</button>
                            </div>    
                        </div>                       
                    </div>
                    <div class="designer_prodect_details">
                        <ul class="img_designer_prodect_details">
                            <li><img src="{{ asset('images/bd1.png') }}" alt=""></li>
                            <li><img src="{{ asset('images/bd2.png') }}" alt=""></li>
                            <li><img src="{{ asset('images/bd3.png') }}" alt=""></li>
                        </ul>
                        <ul class="text_designer_prodect_details">
                            <li><a href="">اسم التصميم</a></li>,
                            <li> <a href=""> اسم التصميم</a></li>,
                            <li><a href=""> اسم التصميم</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 pg_none">
                <div class="tabs_prodect_details">
                     <div class="row pg_none">
                         <div class="col-lg-3">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" >
                                    <a class="nav-link active" id="pills-home-tab1" data-toggle="pill" href="#pills-home1" role="tab" aria-controls="pills-home1" aria-selected="true"> الوصف  </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">  المزيد </a>
                                </li>
                            </ul>
                         </div>
                         <div class="col-lg-9">
                             <div class="main_tabs_prodect_details">
                                 <div class="tab-content" id="pills-tabContent">
                                     <div class="tab-pane fade show active" id="pills-home1" role="tabpanel" aria-labelledby="pills-home-tab1">
                                         <div class="text_tabs_prodect_details">
                                             <p> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.هذا النص هو مثال 
                                                .لنص يمكن أن يستبدل في نفس المساحة،لقد تم توليد هذا النص من مولد النص العربى</p>
                                         </div>
                                     </div>
                                     <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                         <div class="sub_tabs_prodect_details">
                                             <ul>
                                                 <li> التصنيف  : <span>   مطابخ , أثاث , مودرن</span></li>
                                                 <li> المساحة : <span>  310 م</span></li>
                                                 <li> الخامة :   <span> خشب , رخام</span></li>
                                                 <li> رمز التصميم : <span>1148</span>  </li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
          
        </div>
    </div>
    <div class="links_chat_1">
        <ul>
            <li><a href=""><i class="bi bi-share"></i></a></li>
            <li><a href="chat.html"> <i class="bi bi-chat-dots"></i></a></li>
        </ul>
    </div>
</div>
<!--  start comment -->
<div class="modal fade comment_products_modal" id="comment_products">
    <div class="modal-dialog modal-dialog-centered big-modal">
        <div class="modal-content">
            <div class="modal-body">
                <form action="">
                <div class="owl-carousel owl-theme" id="slider_05">
                    <!--start item -->
                    <div class="item" >           
                        <div class="sub_comment_products_modal">
                            <h2>تقييم التصميم <img src="{{ asset('images/l4.png') }}" alt=""></h2>
                            <div class="rates">
                                <input class="star" id="pro-10" type="radio" value="5"   name="star-1" required>
                                <label class="star" for="pro-10"></label>
                                <input class="star" id="pro-9" type="radio" value="4" name="star-1">
                                <label class="star" for="pro-9"></label>
                                <input class="star" id="pro-8" type="radio" value="3" name="star-1">
                                <label class="star" for="pro-8"></label>
                                <input class="star" id="pro-7" type="radio" value="2" name="star-1">
                                <label class="star" for="pro-7"></label>
                                <input class="star" id="pro-6" type="radio" value="1" name="star-1">
                                <label class="star" for="pro-6"></label>
                            </div>
                            <div class="btn_comment_products_modal">
                                <button class="ctm-btn"> تأكيد</button>
                            </div>
                        </div>
                    </div>
                    <!--end item -->
                    <!--start item -->
                    <div class="item">   
                        <div class="sub_comment_products_modal">
                            <h2>تقييم التصميم <img src="{{ asset('images/l4.png') }}" alt=""></h2>
                            <textarea name="" id="" cols="" class="form-control" placeholder=" شاركنا تعليقك عن الموقع .." rows=""></textarea>
                            <div class="btn_comment_products_modal">
                                <button class="ctm-btn"> تأكيد</button>
                            </div>
                        </div>
                    </div>
                    <!--end item -->
                </div>
            </form>
            </div>
         </div>
    </div>
</div>
@endsection
