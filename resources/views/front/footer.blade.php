<footer class="footer">
    <div class="container"> 
      <div class="row">
        <div class="col-md-3 col-sm-4">
          <a href="index.html"><img class="footer-logo" src="assets/img/logo.png" alt=""></a>
          <p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since.</p>
          <!-- Social Box -->
          <div class="f-social-box">
            <ul>
              <li><a href="#"><i class="fa fa-facebook facebook-cl"></i></a></li>
              <li><a href="#"><i class="fa fa-google google-plus-cl"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter twitter-cl"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram instagram-cl"></i></a></li>
            </ul>
          </div>        
        </div>	
        <div class="col-md-9 col-sm-8">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <h4>Job Categories</h4>
              <ul>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Work from Home</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Internship Job</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Freelancer Job</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Part Time Job</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Full Time Job</a></li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-6">
              <h4>Job Type</h4>
              <ul>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Create Account</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Career Counseling</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> My Oficiona</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> FAQ</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Report a Problem</a></li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-6">
              <h4>Resources</h4>
              <ul>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> My Account</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Support</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> How It Works</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Underwriting</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Employers</a></li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-6">
              <h4>Quick Links</h4>
              <ul>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Jobs Listing</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> About Us</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Privacy Policy</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> Term & Condition</a></li>
              </ul>
            </div>
          </div>
        </div>      
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="copyright text-center">
            <p>Copyright © 2021 All Rights Reserved.</p>		  
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- Signup Code -->
  <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" id="myModalLabel1">
        <div class="modal-body">
          <!-- Nav tabs -->


          <div class="form-group text-center">
                <h4 >Sign in</h>
          </div>       
          
          <!-- <ul class="nav nav-tabs nav-advance theme-bg" role="tablist"> -->
            

          
            <!-- <li class="nav-item active"> <a class="nav-link" data-toggle="tab" href="#employer" role="tab"> <i class="ti-user"></i> Work Seeker</a> </li> -->
            <!-- <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#candidate" role="tab"> <i class="ti-user"></i> Work Provider</a> </li> -->
          <!-- </ul> -->


          <!-- Nav tabs --> 
          <!-- Tab panels -->
          <div class="tab-content"> 
            <!-- Employer Panel 1-->
            <div class="tab-pane fade in show active" id="employer" role="tabpanel">
            <form method="POST" action="{{ route('login') }}">
                        @csrf
                <div class="form-group">

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  
                </div>
                <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
                <div class="form-group"> <span class="custom-checkbox">




                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>


                @if (Route::has('password.request'))
                      <a class="btn btn-link fl-right" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                      </a>
                  @endif



                 
                </div>
                <div class="form-group text-center">
                <button type="submit" class="btn btn-primary theme-btn full-width btn-m">
                                    {{ __('Login') }}
                  </button>

                 
                </div>
              </form>
              <div class="log-option"><span>OR</span></div>
              <div class="row">
                <div class="col-md-6"> <a href="#" title="" class="fb-log-btn log-btn"><i class="fa fa-facebook"></i> Facebook</a> </div>
                <div class="col-md-6"> <a href="#" title="" class="gplus-log-btn log-btn"><i class="fa fa-google"></i> Google</a> </div>
              </div>
            </div>
            <!--/.Panel 1--> 
            
            <!-- Candidate Panel 2-->
            <div class="tab-pane fade" id="candidate" role="tabpanel">
            <form method="POST" action="{{ route('login') }}">
                        @csrf
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group"> <span class="custom-checkbox">
                  <input type="checkbox" id="44">
                  <label for="44"></label>
                  Remember Me </span> <a href="#" title="Forget" class="fl-right">Forgot Password?</a> 
                </div>
                <div class="form-group text-center">

                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                  </button>

                </div>
              </form>
              <div class="log-option"><span>OR</span></div>
              <div class="row">
                <div class="col-md-6"> <a href="#" title="" class="fb-log-btn log-btn"><i class="fa fa-facebook"></i> Facebook</a> </div>
                <div class="col-md-6"> <a href="#" title="" class="gplus-log-btn log-btn"><i class="fa fa-google"></i> Google</a> </div>
              </div>
            </div>
          </div>
          <!-- Tab panels --> 
        </div>
      </div>
    </div>
  </div>
  <!-- End Signup --> 
  <div><a href="#" class="scrollup">Scroll</a></div>


  <!-- asjdhjaDGHJAdhjasdghjasdhjkasdhkjdhakjsdhasjdghajsdgjsdgjiasdgsdgdgjasdgahdghsgdhsdgsah
 -->








 @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
<!-- DONE -->
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection