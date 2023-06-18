<!DOCTYPE html>
    <html>
    <head>
        <title> A Decore </title>
        @include('includes.styles')
    </head>
    <body>
<!-- welcome  :) -->
<!-- strat login  as-->
<div class="login_as user-register">
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-lg-12">
                <div class="logo_login_as">
                    <a href="index.html">
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
                                <h2>  تسجيل جديد  </h2>
                                <lottie-player class="lottie2" src="images_json/data1.json"  speed="1"  loop autoplay></lottie-player>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- start title2 == -->
            </div>
            <div class="col-lg-12">
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
                <form action="{{route('designerCreate')}}" method="POST">
                    @csrf
                    <div class="input_login">
                        <i class="bi bi-person"></i>
                        <input type="text" placeholder=" اسم المصمم " class="form-control" name="user_name">
                    </div>
                    <div class="input_login">
                        <i class="bi bi-envelope"></i>
                        <input type="email" placeholder="البريد الإلكتروني" class="form-control" name="email">
                    </div>                   
                    <div class="input_login">
                        <i class="bi bi-phone"></i>
                        <input type="tel" placeholder=" رقم الجوال" class="form-control" name="phone">
                    </div>                                
                    <div class="input_login">
                        <i class="bi bi-link-45deg"></i>
                        <input type="text" placeholder="حساب فيسبوك" class="form-control" name="facebook_link">
                    </div>                                                           
                    <div class="input_login">
                        <i class="bi bi-link-45deg"></i>
                        <input type="text" placeholder="حساب تويتر" class="form-control" name="twitter_link">
                    </div>                                             
                    <div class="input_login">
                        <i class="bi bi-link-45deg"></i>
                        <input type="text" placeholder="حساب انستقرام" class="form-control" name="instagram_link">
                    </div>                                         
                    <div class="input_login">
                        <i class="bi bi-share"></i>
                        <input type="text" placeholder="حسابات أخرى" class="form-control" name="others_link">
                    </div>                    
                    <div class="input_login">
                        <i class="bi bi-lock"></i>
                        <input type="password" placeholder="كلمة المرور" class="form-control" name="password">
                    </div>                    
                    <div class="input_login">
                        <i class="bi bi-lock"></i>
                        <input type="password" placeholder="تأكيد كلمة المرور " class="form-control" name="password_confirmation">
                    </div>                        
                    <div class="check_agrea">
                        <input type="checkbox" id="cleck1">
                        <label for="cleck1"></label>
                        <span data-target="#terms" data-toggle="modal"> الموافقة على الشروط و الأحكام  .</span>
                    </div>

                    <div class="btn_login_for_all">
                        <button class="ctm-btn">  تسجيل </button>
                    </div>
                    <div class="new_login_link">
                        <p> لدي حساب بالفعل .   <a href="login-for-all.html"> تسجيل  دخول</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end login as -->
<!--  start terms_modal -->
<div class="modal fade terms_modal" id="terms">
    <div class="modal-dialog modal-dialog-centered big-modal">
        <div class="modal-content">
            <div class="modal-body">
               <div class="sub_terms_modal">
                   <h2> الشروط و الأحكام  <img src="images/l4.png" alt=""></h2>
                   <p> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>
                    <div class="btn_login_for_all">
                        <button class="ctm-btn">  موافقة و متابعة </button>
                    </div>  
                </div>
            </div>
         </div>
    </div>
</div>
<!--  end terms_modal -->
@include('includes.scripts')
</body>
<!-- end-body -->
</html>