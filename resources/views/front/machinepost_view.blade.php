@extends('front.layout')
@section('content')

<div class="page-title">
    <div class="container">
      <div class="page-caption">
        <h2>Machine Post</h2>
        <p><a href="#" title="Home">User Dashboard</a> <i class="ti-angle-double-right"></i>Machine Post</p>
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
	  <a href="{{route('workorder_view')}}"  class="btn btn-md " style="width:12%;background:#548CA8;color:white">Workorder
	  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
					  @if($workorder_count){{ $workorder_count}} @endif 
						<span class="visually-hidden"> POst</span>
					</span>
	</a>
      <a href="{{route('machinepost_view')}}"  class="btn btn-md " style="width:10%;background:#548CA8;color:white">Machine Post</a>
      <!-- <a href=""  class="btn btn-md " style="width:10%;background:blue;color:white">Payment Report</a> -->
	 <br><br><br>

	 
	  <div class="col-md-9">
        <div id="dashboard_listing_blcok">

		<div class="detail-wrapper">
          <div class="detail-wrapper-header">
            <h4>Machine Post</h4>
          </div>
          <div class="detail-wrapper-body">
            
          
		  {{--machine Post start --}}
			
				
				
			</div>
				
			@foreach (  $machineposts as $k=>$d)
					  @php 
					  $f = Auth::user()->company_id;
					  $mm = $d->usermachine->company_id;
					  @endphp
					  @if($f == $mm)
						<div class="col-md-4 col-sm-4">
						  
						  <div class="statusbox">
							<h3>{{$d->Usermachines->title}}</h3>
							
							<div class="statusbox-content">
							  
							  {{-- <p class="ic_status_item ic_col_three"><i class="fa fa-cc-paypal"></i></p>
							  <h2>Budget</h2>
							  <span></span>  --}}
							  <table class="table">
					  <tr>
						<td><h6>Company Name</h6></td>
						<td></td>
						<td><h6>{{$d->Usermachines->Company->name}}</h6></td>
					  </tr>
					  <tr>
						<td><h6>Category Name</h6></td>
						<td></td>
						<td><h6>{{$d->Usermachines->Category->name}}</h6></td>
					  </tr>
					  <tr>
						<td><h6>Machine Name</h6></td>
						<td></td>
						<td><h6>{{$d->Usermachines->Machine->name}}</h6></td>
					  </tr>
					  
							  </table>		
								  
					  <div class="col-md-12" style="margin-top: -18px">
						  <div class="col-md-8">
							  <a href="{{route('machinePosts_details',$d->id)}}" class="btn-sm btn btn-info">
								  
							  View</a>
							  {{-- <i class="fas fa-edit"></i> --}}
							  
							  
						  </div>
						  <div class="col-md-4" style="margin-left: -25px">
							  <form action="{{route('delete_machinePosts',$d->id)}}" method="post">
								  
								  @csrf
								  @method('delete')
		  
		  
								  <input type="submit" value="Delete" class="btn-sm btn btn-danger" onclick="return confirm('Are You Sure???')">
							  </form>
						  </div>
					  </div>
					  
							</div>
						
						  

			</div>

			{{-- machine Post End  --}}
			</div>

			@endif
			@endforeach	
        	</div>
			  </div>
			</div>
<!-- similar start -->
<div class="col-md-9">
        <div id="dashboard_listing_blcok">

		<div class="detail-wrapper">
			<div class="col-md-12">
					<h4 class="mrg-bot-30">Recent Machine Post</h4>
			</div>
          <div class="detail-wrapper-body">
            
          
		{{-- Workorder Post start --}}
				 <!-- Single Job -->
				 @if($machine_order_recent)
            @foreach($machine_order_recent as $lo => $co)
            @if($lo<8)
            <div class="col-md-4 col-sm-6">
              <div class="utf_grid_job_widget_area"> <span class="job-type full-type">Full Time</span>
                <div class="utf_job_like">
                  <label class="toggler toggler-danger">
                    <input type="checkbox" >
                    <i class="fa fa-heart"></i> 
                  </label>
                </div>
                <div class="u-content">
                  <div class="avatar box-80"> <a href="{{route('show_company_profile_login',$co->usermachine->company->id)}}"> <img class="img-responsive" src="{{asset('photos/company/'.$co->usermachine->company->photo)}}" alt=""> </a> </div>
                  <h5><a href="employer-detail.html">{{$co->title}}</a></h5>
                  <p class="text-muted" style="max-height:20px; overflow: hidden;">{{$co->usermachine->company->address}}</p>
                </div>
                <div class="utf_apply_job_btn_item"> <a href="{{route('show_company_profile_login',$co->usermachine->company->id)}}" target="_blank" class="btn job-browse-btn btn-radius br-light">Visit Company</a> </div>
              </div>
	
            </div>
           	
			@endif
            @endforeach
        @endif
      
      

			{{-- Workorder Post End  --}}
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