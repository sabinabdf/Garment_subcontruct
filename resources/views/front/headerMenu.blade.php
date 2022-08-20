<nav class="navbar navbar-default navbar-mobile navbar-fixed white no-background bootsnav">
    <div class="container"> 
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>
        <a class="navbar-brand" href="{{route('index')}}"> <img src="{{url('Front_Assets/img/logo-light.png')}}" class="logo logo-display" alt=""> <img src="{{url('Front_Assets/img/logo.png')}}" class="logo logo-scrolled" alt=""> </a> 
      </div>
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
          <li class="dropdown active"> <a href="{{route('index')}}">Home</a> </li>
          @if ($data = Auth::user()!='')
          <li class="dropdown active"> <a href="{{route('timeline')}}">Available Post</a> </li>
          @endif
          
          <li class="dropdown active"> <a href="{{route('service')}}">Service</a> </li>
          <li class="dropdown active"> <a href="{{route('about')}}">About Us</a> </li>
          <li class="dropdown active"> <a href="{{route('faq')}}">FAQ</a> </li>

          <li class="dropdown active"> <a href="{{route('contact')}}">Contact</a> </li>
         
         
        </ul>
        <ul class="nav navbar-nav navbar-right">
          
        @guest
                            @if (Route::has('login'))
                            <li class="br-right"><a class="btn-signup red-btn" href="javascript:void(0)" data-toggle="modal" data-target="#signin"><i class="login-icon ti-user"></i>{{ __('Login') }}</a></li>
                            @endif

                            <!-- @if (Route::has('register'))
                            <li class="sign-up"><a class="btn-signup red-btn" href="{{route('register')}}"><span class="ti-briefcase"></span>Register</a></li>
                            @endif -->
                        @else


                                <li>
                                    <!-- <a href="javascript:void(0)" class="dropdown-item">
                                        <i class="mdi mdi-power-settings mr-2"></i> Logout
                                    </a> -->

                                    <a class="dropdown-item btn-signup red-btn" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="mdi mdi-power-settings mr-2"></i>
                                        {{ __('Logout') }}
                                    </a>
                                    <li class="br-right"><a class="btn-signup red-btn" href="{{route('profile')}}"><img src="{{asset('photos/profile/'.Auth::user()->photo)}}" class="img-responsive img-circle" alt="">{{ Auth::user()->name }}</a></li>
                                     

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    
                                      
                                     
                                </li>
                           
                        @endguest




        </ul>
      </div>
    </div>
  </nav>



  