@extends('front.layout')
@section('content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  

<div class="page-title">
    <div class="container">
      <div class="page-caption">
             <h2>Machine Status</h2> 
             
        <p><a href="{{route('dashboard')}}" title="User Dashboard">User Dashboard</a> <i class="ti-angle-double-right"></i>Machine Status</p>
      </div>
    </div>
  </div>
<!-- ================ Profile Settings ======================= -->
<section class="padd-top-10 padd-bot-80">
  <div class="container">
    <div class="row"> 
      <div class="col-md-3">
		<div id="leftcol_item">
    <div class="user_dashboard_pic"> <img alt="user photo" src="{{asset('photos/profile/'.$data->photo)}}"> <span class="user-photo-action">{{ Auth::user()->name }}</span> </div>

    </div>
    @include('front.dashSidebar')
		
      </div>

      <div class="col-md-8 col-xl-6" style="margin-top: 15px;margin-bottom: 50px">
  
        <div class="row">
           
            <div class="col-md-12 ">
            <a href="{{route('dashboard')}}" class="btn btn-md " style="width:12%;background:#548CA8;color:white;"><i class="fas fa-arrow-left" style="color:white"></i>&nbsp;&nbsp;Back</a>
                <h3>Machine status</h3>
                <table class="table table-bordered">
          <tr>
              <th>Title</th>
              <th>Number of  machine</th>
          <th>Number of Available machine</th>
      
          <th>Status</th>
          <th>Action</th>
         
         
            </tr>
            @foreach ($info as $k=>$d)
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

            </div>
          
        </div>

    </div>

		</div>
	
      </div>	  
	

</section>
<!-- ================ End Profile Settings ======================= --> 
@endsection







  