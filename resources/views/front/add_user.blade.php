@extends('front.layout')
@section('content')
    <!-- ======================= Page Title ===================== -->
    <div class="page-title">
        <div class="container">
          <div class="page-caption">
            <h2>Create an User Account</h2>
            <p><a href="{{route('dashboard')}}" title="User Dashboard">User Dashboard</a> <i class="ti-angle-double-right"></i> SignUp</p>
          </div>
        </div>
      </div>
    <!-- ======================= End Page Title ===================== -->

    <!-- ================ Profile Settings ======================= -->
    <section class="padd-top-80 padd-bot-80">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div id="leftcol_item">
                        <div class="user_dashboard_pic"> <img alt="user photo"
                                src="{{ asset('photos/profile/' . $data->photo) }}"> <span class="user-photo-action">
                                {{ Auth::user()->name }}</span> </div>
                    </div>
                    @include('front.dashSidebar')
                </div>
                <div class="col-md-9">
                <a href="{{route('dashboard')}}" class="btn btn-md " style="width:12%;background:#548CA8;color:white;"><i class="fas fa-arrow-left" style="color:white"></i>&nbsp;&nbsp;Back</a>
                <h3>Add New User</h3>
                    <div class="profile_detail_block">
                                    @if(Session::has('success'))
                                <div class="alert alert-info" role="alert">
                                {{ Session::get('success')}}
                                </div>
                                @endif

                                @if(Session::has('error'))
                                <div class="alert alert-danger" role="alert">
                                {{ Session::get('error')}}
                                </div>
                                @endif
                        <form class="log-form" method="POST" action="{{route('save_user')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('Name') }}</label>
                                    <input id="name" type="text" placeholder="Enter Your Name"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}"  autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('Email Address') }}</label>
                                    <input id="email" type="email" placeholder=" Enter Your Email Address"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}"  autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Phone Number" name="phone"
                                        value="{{ old('phone') }}" >
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Designation" name="designation"
                                        value="{{ old('designation') }}" >
                                    @error('designation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('Photo') }}</label>
                                    <input id="photo" type="file" class="form-control" name="photo" 
                                        autocomplete="new-photo">
                                </div>
                                @error('photo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red">{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>

                               
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{ __('Password') }}</label>
                                    <input id="password" type="password" placeholder="Enter Your Password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                         autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color:red">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group text-center mrg-top-15">
                                    <button type="submit" class="btn theme-btn btn-m full-width">Submit</button>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ End Profile Settings ======================= -->
@endsection