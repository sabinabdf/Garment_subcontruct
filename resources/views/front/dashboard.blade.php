@extends('front.layout')
@section('content')

<div class="page-title">
    <div class="container">
      <div class="page-caption">
        <h2>User Dashboard</h2>
        <p><a href="{{route('dashboard')}}" title=">User Dashboard">User Dashboard</a> <i class="ti-angle-double-right"></i></p>
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
				
    <a href="{{route('index')}}" class="btn btn-md " style="width:10%;background:#548CA8;color:white;"><i class=" fas fa-home" style="color:white"></i>&nbsp;&nbsp;Home</a>

	  <a href="{{route('workorder_view')}}"  class="btn btn-md " style="width:12%;background:#548CA8;color:white">Workorder
	  				<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
					  @if($workorder_count){{ $workorder_count}} @endif 
						<span class="visually-hidden"> Post</span>
					</span>
	</a>
      <a href="{{route('machinepost_view')}}"  class="btn btn-md " style="width:10%;background:#548CA8;color:white">Machine Post</a>
	  
      <!-- for seller start   -->
	  @if($delivery_approval_count>0)
	  <!-- <a href="{{route('seller_approval')}}"  class="btn btn-md " style="width:12%;background:blue;color:white">Delivery Approval -->
	  <a class="btn btn-md " href="javascript:void(0)" data-toggle="modal" data-target="#delivery" style="width:13%;background:blue;color:white"></i>{{ __('Delivery Approval') }}
	 				 <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
					  @if($delivery_approval_count){{ $delivery_approval_count }} @endif 
						<span class="visually-hidden"> </span>
					</span>
	</a>
	@endif

  @if($delivery_approval_yes_count>0)
	  <!-- <a href="{{route('seller_approval')}}"  class="btn btn-md " style="width:12%;background:blue;color:white">Delivery Approval -->
	  <a class="btn btn-md btn-danger" href="javascript:void(0)" data-toggle="modal" data-target="#delivery" style="width:15%;"></i>{{ __('Delivery Disapproval') }}
	 				 <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">
					  @if($delivery_approval_yes_count){{ $delivery_approval_yes_count }} @endif 
						<span class="visually-hidden"> </span>
					</span>
	</a>
	@endif

	     <!-- for seller end   -->

            <!-- for merchant start   -->
            @if($delivery_approval_merchant_count>0)
	  <!-- <a href="{{route('seller_approval')}}"  class="btn btn-md " style="width:12%;background:blue;color:white">Delivery Approval -->
	  <a class="btn btn-md " href="javascript:void(0)" data-toggle="modal" data-target="#delivery" style="width:13%;background:blue;color:white"></i>{{ __('Delivery Approval') }}
	 				 <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
					  @if($delivery_approval_merchant_count){{ $delivery_approval_merchant_count }} @endif 
						<span class="visually-hidden"> </span>
					</span>
	</a>
	@endif

  @if($delivery_approval_merchant_yes_count>0)
	  <!-- <a href="{{route('seller_approval')}}"  class="btn btn-md " style="width:12%;background:blue;color:white">Delivery Approval -->
	  <a class="btn btn-md btn-danger" href="javascript:void(0)" data-toggle="modal" data-target="#delivery" style="width:15%;"></i>{{ __('Delivery Disapproval') }}
	 				 <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">
					  @if($delivery_approval_merchant_yes_count){{ $delivery_approval_merchant_yes_count }} @endif 
						<span class="visually-hidden"> </span>
					</span>
	</a>
	@endif     

  @if(Auth::user()->is_admin== 'admin')
            <!-- for merchant end   -->
            <a href="{{route('admin')}}" class="btn btn-md " style="width:12%;background:#548CA8;color:white;"><i class=" fas fa-crown" style="color:white"></i>&nbsp;&nbsp;Admin Panel</a>
            @endif
      <!-- <a href=""  class="btn btn-md " style="width:10%;background:blue;color:white">Payment Report</a> -->
	 <br><br><br><br><br> 
	  <div class="col-md-9">
        <div id="dashboard_listing_blcok">
		  <div class="col-md-4 col-sm-4">
			<div class="statusbox">
			  <h3>Work Order</h3>
			  <div class="statusbox-content">
				<p class="ic_status_item ic_col_one"><i class="fa fa-balance-scale"></i></p>
				<h2>@if($workorder_count<10){{ $workorder_count}} @endif </h2>
				<span>Updated 02 Jan 2021</span> 
			  </div>
			</div>
		  </div>
		  <div class="col-md-4 col-sm-4">
			<div class="statusbox">


				


			  <h3>View Progress</h3>
			  <div class="statusbox-content">
				<p class="ic_status_item ic_col_two"><i class="fa fa-line-chart"></i></p>
				<h2>$280,00</h2>
				<span>Updated 02 Jan 2021</span> 
			  </div>
			</div>
		  </div>
		  <div class="col-md-4 col-sm-4">
			<div class="statusbox">
			  <h3>View Payments</h3>
			  <div class="statusbox-content">
				<p class="ic_status_item ic_col_three"><i class="fa fa-cc-paypal"></i></p>
				<h2>$350,00</h2>
				<span>Updated 02 Jan 2021</span> 
			  </div>
			
			  </div>
			</div>

			
			</div>
<!-- inun end  -->

		

		
		
		</div>
      </div>	  
    </div>
  </div>
</section>


<!-- ================ End Profile Settings ======================= --> 
@endsection 

 <!-- delivery approve modal start  -->


   <!-- Signup Code -->
   <div class="modal fade" id="delivery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" id="myModalLabel2">
        <div class="modal-body">
          <!-- Nav tabs -->


          <div class="form-group text-center">
                <h4 >Delivery Request Approval </h>
          </div>       
          
         


          <!-- Nav tabs --> 
          <!-- Tab panels -->
          <div class="tab-content"> 
            <!-- Employer Panel 1-->
            <div class="tab-pane fade in show active" id="employer" role="tabpanel">
            @if($delivery_approval)
            <form method="POST" action="@if($delivery_approval) {{route('update_seller_approval',$delivery_approval->id)}}  @endif">
            @endif

            @if($delivery_approval_yes)
            <form method="POST" action="@if($delivery_approval_yes) {{route('update_seller_approval',$delivery_approval_yes->id)}}  @endif">
            @endif

            @if($delivery_approval_merchant )
            <form method="POST" action="@if($delivery_approval_merchant) {{route('update_seller_approval',$delivery_approval_merchant->id)}} @endif">
            @endif

            @if($delivery_approval_merchant_yes)
            <form method="POST" action="@if($delivery_approval_merchant_yes) {{route('update_seller_approval',$delivery_approval_merchant_yes->id)}} @endif">
            @endif

                        @csrf
                        @method('put')
                <div class="form-group">
				<label for="">Deal Title</label>

                <input  type="text" class="form-control @error('email') is-invalid @enderror"  value="@if($delivery_approval) {{$delivery_approval->deals->title}} @elseif($delivery_approval_yes)  {{$delivery_approval_yes->deals->title}} @elseif($delivery_approval_merchant) {{$delivery_approval_merchant->deals->title}} @elseif($delivery_approval_merchant_yes)  {{$delivery_approval_merchant_yes->deals->title}} @endif" 
                  disabled >
				        <input type="hidden" name="deal_id" value="@if($delivery_approval) {{$delivery_approval->deal_id}} @elseif($delivery_approval_yes)  {{$delivery_approval_yes->deals->id}} @elseif($delivery_approval_merchant) {{$delivery_approval_merchant->deal_id}} @elseif($delivery_approval_merchant_yes)  {{$delivery_approval_merchant_yes->deals->id}} @endif">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  
                </div>
                <div class="form-group">
					<label for="">Merchant Name</label>
                <input  type="text" class="form-control @error('password') is-invalid @enderror"  value="@if($delivery_approval) {{$delivery_approval->marchant->name}} @elseif($delivery_approval_yes) {{$delivery_approval_yes->marchant->name}} @elseif($delivery_approval_merchant) {{$delivery_approval_merchant->marchant->name}} @elseif($delivery_approval_merchant_yes) {{$delivery_approval_merchant_yes->marchant->name}} @endif " disabled>
				<input type="hidden" name="merchant_id" value="@if($delivery_approval)  {{$delivery_approval->merchant_id}} @elseif($delivery_approval_yes) {{$delivery_approval_yes->marchant->id}} @elseif($delivery_approval_merchant)  {{$delivery_approval_merchant->merchant_id}} @elseif($delivery_approval_merchant_yes) {{$delivery_approval_merchant_yes->marchant->id}} @endif">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>

				<div class="form-group">
					<label for="">Seller Name</label>
                <input  type="text" class="form-control @error('password') is-invalid @enderror"  value=" @if($delivery_approval) {{$delivery_approval->seller->name}} @elseif($delivery_approval_yes) {{$delivery_approval_yes->seller->name}} @elseif($delivery_approval_merchant) {{$delivery_approval_merchant->seller->name}} @elseif($delivery_approval_merchant_yes) {{$delivery_approval_merchant_yes->seller->name}} @endif" disabled>
				<input type="hidden" name="seller_id" value=" @if($delivery_approval) {{$delivery_approval->seller_id}} @elseif($delivery_approval_yes) {{$delivery_approval_yes->seller->id}} @elseif($delivery_approval_merchant) {{$delivery_approval_merchant->seller_id}} @elseif($delivery_approval_merchant_yes) {{$delivery_approval_merchant_yes->seller->id}} @endif">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>

				<div class="form-group">
					<label for="">Delivery Man Name</label>
                <input  type="text" class="form-control @error('password') is-invalid @enderror"  value="@if($delivery_approval) {{$delivery_approval->deliveryman->name}} @elseif($delivery_approval_yes) {{$delivery_approval_yes->deliveryman->name}} @elseif($delivery_approval_merchant) {{$delivery_approval_merchant->deliveryman->name}} @elseif($delivery_approval_merchant_yes) {{$delivery_approval_merchant_yes->deliveryman->name}} @endif" disabled>
				<input type="hidden" name="deliveryman_id" value="@if($delivery_approval) {{$delivery_approval->deliveryman_id}} @elseif($delivery_approval_yes) {{$delivery_approval_yes->deliveryman->id}} @elseif($delivery_approval_merchant) {{$delivery_approval_merchant->deliveryman_id}} @elseif($delivery_approval_merchant_yes) {{$delivery_approval_merchant_yes->deliveryman->id}} @endif">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
				<div class="form-group text-center">

        <!-- for seller buttun start -->
				@if($delivery_approval) 

                
				<input type="hidden" name="seller_approval" value="yes">
                <button   class="btn btn-primary theme-btn full-width btn-m" onclick="return confirm('Are you want to approve ?')">{{ __('Approve') }}</button>

				@endif

        @if($delivery_approval_yes)                 
			
				<input type="hidden" name="seller_approval" value="no">
                <button   class="btn btn-danger full-width btn-m" onclick="return confirm('Are you want to disapprove ?')">{{ __('Disapprove') }}</button>


				@endif
        
                <!-- for merchant buttun start -->

        @if($delivery_approval_merchant) 

                
              <input type="hidden" name="merchant_approval" value="yes">
                <button   class="btn btn-primary theme-btn full-width btn-m" onclick="return confirm('Are you want to approve ?')" >{{ __('Approve') }} </button>

        @endif

        @if($delivery_approval_merchant_yes)                 

              <input type="hidden" name="merchant_approval" value="no">
               <button   class="btn btn-danger full-width btn-m" onclick="return confirm('Are you want to disapprove ?')">{{ __('Disapprove') }}</button>


        @endif
                </div>
              
             
            </div>
          </div>
          <!-- Tab panels --> 
        </div>
      </div>
    </div>
  </div>
  <!-- End Signup --> 
 <!-- delivery approve modal end -->