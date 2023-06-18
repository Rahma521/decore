<div class="top_bar">
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 col-sm-6 col-6 ">
            <div class="logo">
                <a href="index.html">
                    <lottie-player class="lottie1" src="images_json/data.json"  speed="1"  loop autoplay></lottie-player>
                </a>
            </div>
        </div>
        <!-- start icon_header -->
        <div class="col-lg-6 col-md-6 col-sm-6  col-6">
            <div class="icon_header">
                <ul>
                    <li>
                        <span class="drop1"> <i class="bi bi-person"></i></span>
                        <div class="login-index"  id="c1">
                            <ul>
                                <li>
                                    @if (auth()->guard('designer')->check())
                                        <span>Hi Designer {{ Auth()->guard('designer')->user()->user_name}}</span>
                                        <li> 
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                               <span>{{ __('Logout') }}</span> 
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form> 
                                        </li>
                                    @elseif (auth()->guard('showroom')->check())
                                        <span>Hi showroom {{ Auth()->guard('showroom')->user()->user_name}} </span>
                                        <li> 
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                               <span>{{ __('Logout') }}</span> 
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form> 
                                        </li>
                                    @elseif (auth()->check())
                                        <span> Hi {{ Auth::user()->user_name }}</span>
                                        <li> 
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                               <span>{{ __('Logout') }}</span> 
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form> 
                                        </li>
                                    @else
                                        <li>
                                            <a href=" {{route('loginForm')}}" > <i class="bi bi-box-arrow-in-left"></i>  <span>تسجيل الدخول </span> </a>
                                        </li>
                                        <li>
                                            <a href="{{route('loginAs')}}" > <i class="bi bi-box-arrow-in-left"></i> <span> انشاء حساب  </span></a>
                                        </li>
                                    @endif
                                </li>
                            </ul>
                       </div>
                    </li>
                    <li><span  class="drop2"> <i class="bi bi-bag"></i> </span> 
                        <div class="cart_index" id="c2">
                            @include('includes.cartCard') 
                        </div>
                    </li>
                    <li id="times-ican"><span> <i class="bi bi-list"></i></span></li>
                </ul>
            </div>
        </div>
        <!-- end icon_header -->
    </div>
</div>