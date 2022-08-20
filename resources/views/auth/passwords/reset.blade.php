<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Broker Login </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="login_assets/images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="{{asset('login_assets/vendor/bootstrap/css/bootstrap.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('login_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('login_assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('login_assets/vendor/animate/animate.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('login_assets/vendor/css-hamburgers/hamburgers.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('login_assets/vendor/animsition/css/animsition.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('login_assets/vendor/select2/select2.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('login_assets/vendor/daterangepicker/daterangepicker.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('login_assets/css/util.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('login_assets/css/main.css')}}">

<meta name="robots" content="noindex, follow">
<script nonce="7d776ad0-6f42-4465-baa1-bba52bba9b68">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{};a.zarazData.executed=[];a.zaraz={deferred:[]};a.zaraz.q=[];a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text);a.zarazData.x=Math.random();a.zarazData.w=a.screen.width;a.zarazData.h=a.screen.height;a.zarazData.j=a.innerHeight;a.zarazData.e=a.innerWidth;a.zarazData.l=a.location.href;a.zarazData.r=e.referrer;a.zarazData.k=a.screen.colorDepth;a.zarazData.n=e.characterSet;a.zarazData.o=(new Date).getTimezoneOffset();a.zarazData.q=[];for(;a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin";z.src="../../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData)));t.parentNode.insertBefore(z,t)};["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body>
<div class="limiter">
        <div class="container-login100" style="background-image: url('login_assets/images/bg-01.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                Admin {{ __('Login') }}
                </span>
            <form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{ route('login') }}">
            @csrf
                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input class="input100" type="email" name="email" id="email"  placeholder="{{ __('Email Address') }}" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                   
                            @error('email')
                            <div class="alert alert-success" role="alert">{{ $message }}</div>

                            @enderror

                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" id="password" type="password"  name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">

                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                            @error('password')
                            <div class="alert alert-success" role="alert">{{ $message }}</div>

                            @enderror

               
                </div>

                <div class="container-login100-form-btn m-t-32">

                
                   
                    <button class="login100-form-btn">
                    {{ __('Login') }}
                    </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                
                </div>
            </form>
            </div>
        </div>
</div>
<div id="dropDownSelect1"></div>

<script src="login_assets/vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="login_assets/vendor/animsition/js/animsition.min.js"></script>

<script src="login_assets/vendor/bootstrap/js/popper.js"></script>
<script src="login_assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="login_assets/vendor/select2/select2.min.js"></script>

<script src="login_assets/vendor/daterangepicker/moment.min.js"></script>
<script src="login_assets/vendor/daterangepicker/daterangepicker.js"></script>

<script src="login_assets/vendor/countdowntime/countdowntime.js"></script>

<script src="login_assets/js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"737b7c5ff9a149f6","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>




