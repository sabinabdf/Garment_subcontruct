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
        <form class="log-form" method="POST" action="{{ route('register') }}">
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
                <label>{{ __('Phone') }}</label>
                <input type="text" class="form-control" placeholder="Phone" name="" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>{{ __('Designation') }}</label>
                <input type="text" class="form-control" placeholder="Designation" name="" required>
              </div>
            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label>{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
              <div class="form-group">
                <label>Photo</label>
                <input type="text" class="form-control"  name="" >
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

<!-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->