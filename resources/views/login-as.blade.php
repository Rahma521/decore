
<!DOCTYPE html>
    <html>
    <head>
        <title> A Decore </title>
        @include('includes.styles')
    </head>
    <body>

<!-- welcome  :) -->
<!-- strat login  as -->
<div class="login_as ">
    <div class="container">
        <div class="row  justify-content-center"">
            <div class="col-lg-12">
                <div class="logo_login_as">
                    <a href="{{route('home')}}">
                        <lottie-player class="lottie1" src="images_json/data.json"  speed="1"  loop autoplay></lottie-player>
                    </a>
                </div>
            </div> 
            <div class="col-lg-12">
                <!-- start title2 == -->
                <div class="title2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <lottie-player class="lottie2" src="images_json/data1.json"  speed="1"  loop autoplay></lottie-player>
                                <h2> تسجيل الدخول كـــ </h2>
                                <lottie-player class="lottie2" src="images_json/data1.json"  speed="1"  loop autoplay></lottie-player>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- start title2 == -->
            </div>
            <div class="col-lg-4">
                 <div class="sub_login_as">
                     <a href="{{route('user')}}">
                         <div class="shep_login_as">
                            <div class="img_login_as">
                                <img src="images/l1.png" alt="">
                            </div>
                         </div>
                         <h2>مستخدم</h2>
                     </a>
                 </div>
            </div>
            <div class="col-lg-4">
                <div class="sub_login_as">
                    <a href="{{route('showroom')}}">
                        <div class="shep_login_as">
                           <div class="img_login_as">
                               <img src="images/l3.png" alt="">
                           </div>
                        </div>
                        <h2>معرض</h2>
                    </a>
                </div>
           </div>
           <div class="col-lg-4">
            <div class="sub_login_as">
                <a href="{{route('designer')}}">
                    <div class="shep_login_as">
                       <div class="img_login_as">
                           <img src="images/l2.png" alt="">
                       </div>
                    </div>
                    <h2>مصمم</h2>
                </a>
            </div>
       </div>
            
        </div>
    </div>
</div>
@include('includes.scripts')
</body>
<!-- end-body -->
</html>