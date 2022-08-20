@extends('front.layout')
@section('content')
<!-- ======================= Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>User Dashboard</h2>
      <p><a href="{{route('dashboard')}}" title="User Dashboard">User Dashboard</a> <i class="ti-angle-double-right"></i> Password Change</p>
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
		  <div class="user_dashboard_pic"> <img alt="user photo" src="{{asset('photos/profile/'.$data->photo)}}"> <span class="user-photo-action">{{Auth::User()->name}}</span> </div>
		</div>
		@include('front.dashSidebar')
	  </div>

	  <!-- start  -->
	  <div class="col-md-9">
	  		
	  <a href="{{route('dashboard')}}" class="btn btn-md " style="width:12%;background:#548CA8;color:white;"><i class="fas fa-arrow-left" style="color:white"></i>&nbsp;&nbsp;Back</a>

			 

	  <h3>Change your password</h3>
		<div class="profile_detail_block">


				@if(Session::has('status'))
				<div class="alert alert-danger" role="alert">
				  {{ Session::get('status')}}
				</div>
				@endif

				@if(Session::has('success'))
				<div class="alert alert-info" role="alert">
				  {{ Session::get('success')}}
				</div>
				@endif


			<form action="{{route('change_pass',$data->id)}}" method="post">
				@csrf
			<div class="col-md-4 col-sm-6 col-xs-12">
			  <div class="form-group">
				<label>Old Password</label>
				<input type="text" class="form-control" placeholder="Enter your old password" name="old_pass">
				@error('old_pass')
                	  <span class="invalid-feedback" role="alert">
                	      <strong class="alert-danger">{{ $message }}</strong>
                	  </span>
            	 @enderror
			  </div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
			  <div class="form-group">
				<label>New Password </label>
				<input type="text" class="form-control" placeholder="Enter your new password" name="new_pass">
				@error('new_pass')
                     <span class="invalid-feedback" role="alert">
                         <strong class="alert-danger">{{ $message }}</strong>
                    </span>
                @enderror
			  </div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
			  <div class="form-group">
				<label>Confirm Password</label>
				<input type="text" class="form-control" placeholder="Confirm your password" name="confirm_pass">
				@error('confirm_pass')
                	 <span class="invalid-feedback" role="alert">
                	     <strong class="alert-danger">{{ $message }}</strong>
                	 </span>
            	 @enderror
			  </div>
			</div>	
			<div class="clearfix"></div>
			<div class="col-md-12 padd-top-10 text-center"> 
				<button class="btn btn-m theme-btn full-width">Update</button>
			</div>
			</form>
		</div>
      </div>
	  <!-- end 	   -->
    </div>
  </div>
</section>
<!-- ================ End Profile Settings ======================= --> 
@endsection