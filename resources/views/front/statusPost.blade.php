@extends('front.layout')
@section('content')
<!-- ======================= Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Profile Settings</h2>
      <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i> Profile Settings</p>
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
	  <div class="col-md-9 col-sm-12 col-xs-12">
     
            <h4 style="text-align:center;">Mark As Busy Or Available Machine</h4>
            <form action="">

        <table class="table table-bordered">
          <tr>
              <th>Title</th>
              <th>Number of  machine</th>
          <th>Number of Available machine</th>
      
          <th>Status</th>
          <th>Action</th>
         
         
            </tr>
            @foreach ($data as $k=>$d)
            <tr>

          <td>{{$d->title}}</td>
          <td>{{$d->number_of_machine}}</td>
          <td>{{$d->number_of_available}}</td>
          <td>{{$d->status}}</td>
          <td>
          <a href="{{route('edit_status',$d->id)}}" class="btn btn-success">Edit</a>
        </td>
            </tr>
            @endforeach
        

        </table>

            </form>
         
          </div>
	  <!-- end 	   -->
    </div>
  </div>
</section>
<!-- ================ End Profile Settings ======================= --> 
@endsection