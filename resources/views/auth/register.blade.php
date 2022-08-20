@extends('front.layout')
@section('content')

<!-- ======================= Start Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Create an Account</h2>
      <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i> SignUp</p>
    </div>
  </div>
</div>
<!-- ======================= End Page Title ===================== --> 
<!-- ====================== Start Signup Form ============= -->
<section class="padd-top-80 padd-bot-80">
  <div class="container">
      <div class="log-box">
        <form class="log-form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
            <div class="col-md-6">
              <div class="form-group">
                    <label>{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{ old('phone') }}" required>
                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Designation</label>
                <input type="text" class="form-control" placeholder="Designation" name="designation" value="{{ old('designation') }}" required>
                @error('designation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label>{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
            </div>          
            
            <div class="col-md-12">
              <div class="form-group text-center mrg-top-15">
                <button type="submit" class="btn theme-btn btn-m full-width">Sign Up</button>
              </div>
            </div>
			<div class="clearfix"></div>			
        </form>
      </div>
  </div>
</section>
<!-- ====================== End Signup Form ============= --> 
@endsection
