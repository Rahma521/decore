<!DOCTYPE html>
    <html>
    <head>
        <title> A Decore </title>
        @include('includes.styles')
    </head>
    <body>
<!-- welcome  :) -->
<!-- strat login  as -->
<div class="login_as login_for_all">
    <div class="container">
        <div class="row  justify-content-center">
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
                                <h2> تسجيل الدخول  </h2>
                                <lottie-player class="lottie2" src="images_json/data1.json"  speed="1"  loop autoplay></lottie-player>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- start title2 == -->
            </div>
            <div class="col-lg-12">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="input_login">
                        <i class="bi bi-envelope"></i>
                        <input type="email" placeholder="البريد الإلكتروني" class="form-control" name="email" >
                    </div>
                    <div class="input_login">
                        <i class="bi bi-lock"></i>
                        <input type="password" placeholder="كلمة المرور" class="form-control" name="password" >
                    </div>
                    <div class="forgot_password">
                        <a href="forgot-password.html"> نسيت كلمة المرور ؟</a>
                    </div>
                    <div class="btn_login_for_all">
                        <button class="ctm-btn"> دخول</button>
                    </div>
                    <div class="new_login_link">
                        <p> ليس لدي حساب .   <a href="{{route('loginAs')}}"> تسجيل  جديد</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end login as -->
@include('includes.scripts')
</body>
<!-- end-body -->
</html>