@extends('front.layout')
@section('content')
<div class="page-title">
    <div class="container">
      <div class="page-caption">
        {{-- <h2>Add new Order</h2> --}}
        <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i>Work Order Details</p>
      </div>
    </div>
  </div>
<!-- ================ Profile Settings ======================= -->
<section class="padd-top-80 padd-bot-80">
  <div class="container">
    <div class="row"> 
      <div class="col-md-3">
		<div id="leftcol_item">
		  <div class="user_dashboard_pic"> <img alt="user photo" src="{{asset('photos/profile/'.$data->photo)}}"> <span class="user-photo-action">{{ Auth::user()->name }}</span> </div>
		</div>
		<div class="dashboard_nav_item">
		  <ul>
		    <li class="active"><a href="{{route('dashboard')}}"><i class="login-icon ti-dashboard"></i> Dashboard</a></li>
			<li><a href="{{route('profile')}}"><i class="login-icon ti-user"></i> Edit Profile</a></li>
			<li><a href="{{route('c_pass')}}"><i class="login-icon ti-key"></i> Change Password</a></li>
			<li><a href="#"><i class="login-icon ti-power-off"></i> Logout</a></li>
		  </ul>
		</div>
      </div>

      <div class="col-md-8 col-xl-6" style="margin-top: 100px;margin-bottom: 50px">
            
        <div class="row">
           

            <div class="col-md-4">
             
                <img src="" alt="" class="img-responsive">
                {{-- {{url('uploads/'.$userMachine->photo)}} --}}
            </div>
            <div class="col-md-8">
                <h5>Workorder Details</h5>
                <table class="table">
                    <tr>
                        <td>Company Name</td>
                        <td>  {{$w_details->Companies->name}}</td>
                      
                    </tr>
                    <tr>
                        <td>Category Name</td>
                        <td>{{$w_details->Category->name}}</td>
                       
                    </tr>
                    <tr>
                        <td>Machine name</td>
                        <td>{{$w_details->Machine->name}}</td>
                        
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td>{{$w_details->title}}</td>
                        
                    </tr>
                    <tr>
                        <td>Budget</td>
                        <td>{{$w_details->budget}}</td>
                        
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td>{{$w_details->quantity}}</td>
                       
                    </tr>
                    <tr>
                        <td>Deadline</td>
                        <td>{{$w_details->deadline}}</td>
                       
                    </tr>
                </table>

            </div>
          
        </div>

    </div>

     
     <section class="padd-bot-80">
    <div class="container" style="margin-top:50px">
        
        <div class="col-md-8">
            <h4>Spacifications</h4><hr>
            <table class="table">
                @php
                 $data = json_decode($w_details->specifications);
                @endphp
                @foreach ( $data as $key=>$value)
                <tr>
                    <td> {{$key}}</td>
                   
                    <td>{{$value}}</td>
                    
                </tr>
                @endforeach
            </table>

        </div>
        <div class="col-md-8">
            <h4>More Details</h4><hr>
            <table class="table">
                <tr>
                    <td>Quality</td>
                    <td>{{$w_details->quality_related}}</td>
                    
                </tr>
                <tr>
                    <td>Created Date</td>
                    <td>{{$w_details->created_at}}</td>
                   
                </tr>
                <tr>
                    <td>Status</td>
                    <td>{{$w_details->status}}</td>
                   
                </tr>

            </table>
        </div>

    </div>
</section>

		{{-- </div>
	
      </div>	  

</section> --}}
<!-- ================ End Profile Settings ======================= --> 
@endsection
