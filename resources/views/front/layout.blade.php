<!DOCTYPE html>
<html class="" lang="zxx">
<head>
<meta name="author" content="">
<meta name="description" content="">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>:: Broker - Sub Contract ::</title>

<!-- Favicon Icon -->
<link rel="shortcut icon" href="{{url('Front_Assets/img/favicon.png')}}" />

<!-- CSS -->
<link rel="stylesheet" href="{{asset('Front_Assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('Front_Assets/plugins/bootstrap/css/bootstrap-select.min.css')}}">
<link href="{{asset('Front_Assets/plugins/icons/css/icons.css')}}" rel="stylesheet">
<link href="{{asset('Front_Assets/plugins/animate/animate.css')}}" rel="stylesheet">
<link href="{{asset('Front_Assets/plugins/bootstrap/css/bootsnav.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('Front_Assets/plugins/nice-select/css/nice-select.css')}}">
<link href="{{asset('Front_Assets/plugins/aos-master/aos.css')}}" rel="stylesheet">
<link href="{{asset('Front_Assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('Front_Assets/css/responsive.css')}}" rel="stylesheet">

<link href="{{asset('Front_Assets/css/accordion.css')}}" rel="stylesheet">
<link href="{{asset('Front_Assets/css/team.css')}}" rel="stylesheet">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&amp;display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<span>
	@yield('style')
</span>
<body class="utf_skin_area">
<div class="page_preloader"></div>

@include('front.headerMenu')
{{-- bennar Section start --}}
<span>
    @yield('bennar')
</span>
{{-- end of bennar section --}}
{{-- content starts --}}
<span>
    @yield('content')
</span>
{{-- content end --}}

{{-- start categories --}}
<span>
    @yield('categories')
</span>

{{-- start subscriber --}}
@include('Front.subscriber')


{{-- footer starts --}}
@include('Front.footer')

</body>
    
<script src="{{asset('Front_Assets/js/jquery.min.js')}}"></script> 
<script src="{{asset('Front_Assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('Front_Assets/plugins/bootstrap/js/bootsnav.js')}}"></script> 
<script src="{{asset('Front_Assets/js/viewportchecker.js')}}"></script> 
<script src="{{asset('Front_Assets/js/slick.js')}}"></script> 
<script src="{{asset('Front_Assets/plugins/bootstrap/js/wysihtml5-0.3.0.js')}}"></script> 
<script src="{{asset('Front_Assets/plugins/bootstrap/js/bootstrap-wysihtml5.js')}}"></script> 
<script src="{{asset('Front_Assets/plugins/aos-master/aos.js')}}"></script> 
<script src="{{asset('Front_Assets/plugins/nice-select/js/jquery.nice-select.min.js')}}"></script> 
<script src="{{asset('Front_Assets/js/custom.js')}}"></script> 
<script>
	$(window).load(function() {
	  $(".page_preloader").fadeOut("slow");;
	});
	AOS.init();
</script>
<!-- jQuery -->
<span>
	@yield('jquery')
</span>
</body>
</html>