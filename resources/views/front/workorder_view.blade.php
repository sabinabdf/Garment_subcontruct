@extends('front.layout')
@section('content')

<div class="page-title">
    <div class="container">
      <div class="page-caption">
        <h2>Work Order</h2>
        <p><a href="#" title="Home">User Dashboard</a> <i class="ti-angle-double-right"></i>Work Order</p>
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
		@include('front.dashSidebar')
	  </div>
	  <a href="{{route('dashboard')}}" class="btn btn-md " style="width:10%;background:#548CA8;color:white"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
	  <a href="{{route('workorder_view')}}"  class="btn btn-md " style="width:10%;background:#548CA8;color:white">Workorder</a>
      <a href="{{route('machinepost_view')}}"  class="btn btn-md " style="width:10%;background:#548CA8;color:white">Machine Post</a>
      <!-- <a href=""  class="btn btn-md " style="width:10%;background:blue;color:white">Payment Report</a> -->
	 <br><br><br>

	 
	  <div class="col-md-9">
        <div id="dashboard_listing_blcok">

		<div class="detail-wrapper">
          <div class="detail-wrapper-header">
            <h4>Work Order </h4>
          </div>
          <div class="detail-wrapper-body">
            
          
		{{-- Workorder Post start --}}
			
				
				
			</div>
				
			  @foreach ($workorder as $w)
			  <div class="col-md-4 col-sm-4">
				
				<div class="statusbox">
				  <h3>{{$w->title}}</h3>
				  
				  <div class="statusbox-content">
					
					{{-- <p class="ic_status_item ic_col_three"><i class="fa fa-cc-paypal"></i></p>
					<h2>Budget</h2>
					<span></span>  --}}
					<table class="table">
						
					<!-- <tr>
						<td colspan="3">
						<div class="box-80"> <a href=""> <img class="img-responsive" src="{{asset('photos/company/'.$w->Companies->photo)}}" alt=""> </a> </div>
						</td>
					</tr> -->
						<tr>
							<th><h5>Company: </h5></th>
							<th></th>
							<th><h5>{{$w->Companies->name}}</h5></th>
							
						</tr>

						<tr>
							<th><h5>Budget :</h5></th>
							<th></th>
							<th><h5>{{$w->budget}}</h5></th>
							
						</tr>
						<tr>
							<th><h5>Quantity:</h5></th>
							<th></th>
							<th><h5>{{$w->quantity}}</h5></th>
							
						</tr>
						<tr>
							<th><h5>Deadline:</h5></th>
							<th></th>
							<th><h5>{{$w->deadline}}</h5></th>
							
						</tr>
						<tr>
							<th></th>
							<th></th>
							<th></th>
							
						</tr>
					
						
						

					</table>		
						
			<div class="col-md-12" style="margin-top: -18px">
				<div class="col-md-8">
					<a href="{{route('order_details',$w->id)}}" class="btn-sm btn btn-info">
						
					View</a>
					{{-- <i class="fas fa-edit"></i> --}}
					<a href="{{route('edit_workorder',$w->id)}}" class="btn-sm btn btn-success">Edit</a>
					
				</div>
				<div class="col-md-4" style="margin-left: -25px">
					<form action="{{route('delete_workorder',$w->id)}}" method="post">
						
						@csrf
						@method('delete')


						<input type="submit" value="Delete" class="btn-sm btn btn-danger" onclick="return confirm('Are You Sure???')">
					</form>
								
				  </div>
				</div>
			  </div>
			 
			</div>
			
			{{-- Workorder Post End  --}}
			</div>
			@endforeach
        	</div>
			  </div>
			</div>
<!-- similar start -->
<div class="col-md-9">
        <div id="dashboard_listing_blcok">

		<div class="detail-wrapper">
			<div class="col-md-12">
					<h4 class="mrg-bot-30">Recent Work Order Post</h4>
			</div>
          <div class="detail-wrapper-body">
            
          
		{{-- similar Post start --}}
		
         
              
		@if($recent_work_order)
            @foreach($recent_work_order as $lo => $co)
            @if($lo<8)             
        
		<div class="col-md-4 col-sm-6">
        <div class="utf_grid_job_widget_area"> <span class="job-type part-type">Full Time</span>
          <div class="utf_job_like">
            <label class="toggler toggler-danger">
              <input type="checkbox" >
              <i class="fa fa-heart"></i> 
			</label>
          </div>
          <div class="u-content">
            <div class="avatar box-80"> <a href="{{route('show_company_profile_login',$co->Companies->id)}}"> <img class="img-responsive" src="{{asset('photos/company/'.$co->Companies->photo)}}" alt="">  </a> </div>
            <h5><a href="employer-detail.html">{{$co->title}}</a></h5>
			<p class="text-muted" style="max-height:20px; overflow: hidden;">Company : {{$co->Companies->name}}</p>
                  <p class="text-muted" style="max-height:20px; overflow: hidden;">Category : {{$co->Machine->name}}</p>
                  <p class="text-muted" style="max-height:20px; overflow: hidden;">Machine : {{$co->Category->name}}</p>
          </div>
		  <div class="utf_apply_job_btn_item"> <a href="{{route('show_company_profile_login',$co->Companies->id)}}" target="_blank" class="btn job-browse-btn btn-radius br-light">Visit Company</a> </div>
        </div>
      </div>
          
	  @endif
            @endforeach
            @endif
               
      <!-- Single Job -->
      
			{{-- similar Post End  --}}
			</div>
        	</div>
			  </div>
			</div>
<!-- similar start -->
			<!-- table start  -->
			
			<div class="col-md-12 col-sm-8">
			
			</div>
			
			<!-- table end  -->
			

			  <!-- machinepost start  -->
		

<!-- inun start  -->



<div class="col-md-12 col-sm-8" style="margin-top: 45px">
			
						  
					 
			</div>
<!-- inun end  -->

		

		
		
		</div>
      </div>	  
    </div>
  </div>
</section>


<!-- ================ End Profile Settings ======================= --> 
@endsection 