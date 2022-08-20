@extends('front.layout')
@section('content')
<div class="page-title">
    <div class="container">
      <div class="page-caption">
        <h2>Work Order Details</h2> 
        <p><a href="#" title="Home">Dashboard</a> <i class="ti-angle-double-right"></i>Work Order Details</p>
      </div>
    </div>
  </div>
<!-- ================ Profile Settings ======================= -->
{{-- <section class="padd-top-80 padd-bot-80"> --}}
  <div class="container">
    <div class="row"> 
      <div class="col-md-3">
		<div id="leftcol_item">
		  <div class="user_dashboard_pic"> <img alt="user photo" src="{{asset('photos/profile/'.$data->photo)}}"> <span class="user-photo-action">{{ Auth::user()->name }}</span> </div>
		</div>
        @include('front.dashSidebar')
      </div>
      <br>
      <a href="{{route('workorder_view')}}" class="btn btn-md " style="width:10%;background:#548CA8;color:white"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Back</a>

      <a href="" class="br-right"><button onclick="printableDiv('printableArea')" class="btn btn-md br-right" style="width:10%;background:#548CA8;color:white"><i class="fas fa-print">&nbsp;&nbsp;Print</i></button>  

                <div id="printableArea">
<br><br><br>
      <div class="col-md-8 col-xl-6" style="margin-top: 20px;margin-bottom: 50px">
            
        {{-- <div class="row"> --}}
           

            <div class="col-md-4">
            <br><br>
                <img src="@if($workOrderPostDetails){{asset('photos/company/'.$workOrderPostDetails->Companies->photo)}} @else {{asset('photos/deals/workorder.jpg')}} @endif" alt="" class="img-responsive">
                {{-- {{url('uploads/'.$userMachine->photo)}} --}}
            </div>
            <div class="col-md-8">
                <h3>Workorder Details</h3>
                <table class="table">
                    <tr>
                        <td>Company Name</td>
                        <td>  {{$workOrderPostDetails->Companies->name}}</td>
                      
                    </tr>
                    <tr>
                        <td>Category Name</td>
                        <td>{{$workOrderPostDetails->Categories->name}}</td>
                       
                    </tr>
                    <tr>
                        <td>Machine name</td>
                        <td>{{$workOrderPostDetails->Machines->name}}</td>
                        
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td>{{$workOrderPostDetails->title}}</td>
                        
                    </tr>
                    <tr>
                        <td>Budget</td>
                        <td>{{$workOrderPostDetails->budget}}</td>
                        
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td>{{$workOrderPostDetails->quantity}}</td>
                       
                    </tr>
                    <tr>
                        <td>Deadline</td>
                        <td>{{$workOrderPostDetails->deadline}}</td>
                       
                    </tr>
                </table>

            </div>
          
        {{-- </div> --}}

    </div>

     
     {{-- <section class="padd-bot-80"> --}}
    <div class="container" style="margin-top:50px">
        
        <div class="col-md-8">
            <h4>Specifications</h4><hr>
            <table class="table">
                @php
                 $data = json_decode($workOrderPostDetails->specifications);
                @endphp
                @foreach ( $data as $key=>$value)
                <tr>
                    <td>Specification Title</td>
                    <td>Specification Value</td>
                </tr>
                <tr>
                    <td> {{$key}}</td>
                   
                    <td>{{$value}}</td>
                    
                </tr>
                @endforeach
            </table>

        </div>
        <div class="container">
            <div class="col-md-3"></div>
            <div class="col-md-8">
                <h4>More Details</h4><hr>
                <table class="table">
                    <tr>
                        <td>Quality</td>
                        <td>{{$workOrderPostDetails->quality_related}}</td>
                        
                    </tr>
                    <tr>
                        <td>Created Date</td>
                        <td>{{$workOrderPostDetails->created_at}}</td>
                       
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>{{$workOrderPostDetails->status}}</td>
                       
                    </tr>
    
                </table>
            </div>





            <div class="col-xs-4 col-md-4">
                    <h1>{{$workOrderPostDetails->title}}</h1>
                    <?php $t = 'workOrder'; ?>
                    <div class="utf_apply_job_btn_item " style="padding-left:350px;padding-top:50px">
                    <a href="{{route('proposalFrom',['id'=>$workOrderPostDetails->id,'name'=>$t])}}" class="btn btn-lg job-browse-btn btn-radius br-light" >Submit Proposal</a>
                    </div>
                </div>







    <!-- similar start  -->

    <!-- similar start -->
<div class="col-md-9">
<br><br><br>
        <div id="dashboard_listing_blcok">

		<div class="detail-wrapper">
			<div class="col-md-12">
					<h4 class="mrg-bot-30">Suggested Machine Post</h4>
			</div>
          <div class="detail-wrapper-body">
            
          
		{{-- similar Post start --}}
		
         
              
             
        
		@if($mahinepost)
            @foreach($mahinepost as $ww)
              @if($machine_id == $ww->usermachine->machine_id)
      <!-- Single Job -->
      <div class="col-md-4 col-sm-6">
      @php 
       $date = date('d-m-Y', strtotime($ww->created_at))
      @endphp
              <div class="utf_grid_job_widget_area"> <span class="job-type full-type">Post Date : @if($date){{$date}}@endif</span>
                <div class="utf_job_like">
                  <label class="toggler toggler-danger">
                    <input type="checkbox" >
                    <i class="fa fa-heart"></i> 
                  </label>
                </div>
                <div class="u-content">
                  <div class="avatar box-80"> <a href="{{route('show_company_profile_login',$ww->usermachine->company->id)}}" target="_blank"> <img class="img-responsive" src="{{asset('photos/company/'.$ww->usermachine->company->photo)}}" alt=""> </a> </div>
                  <h5><a href="{{route('show_company_profile_login',$ww->usermachine->company->id)}}">{{$ww->title}}</a></h5>
                  <p class="text-muted" style="max-height:20px; overflow: hidden;">Company : {{$ww->usermachine->company->name}}</p>
                  <p class="text-muted" style="max-height:20px; overflow: hidden;">Category : {{$ww->usermachine->category->name}}</p>
                  <p class="text-muted" style="max-height:20px; overflow: hidden;">Machine : {{$ww->usermachine->machine->name}}</p>
                </div>
                <div class="utf_apply_job_btn_item"> <a href="{{route('show_company_profile_login',$ww->usermachine->company->id)}}" target="_blank" class="btn job-browse-btn btn-radius br-light">Visit Company</a> </div>
              </div>
            </div>
            @endif
        @endforeach
      @endif
      
			{{-- similar Post End  --}}
			</div>
        	</div>
			  </div>
			</div>
            <br><br><br>
<!-- similar start -->
    <!-- similar end -->
        </div>
    </div>

    
{{-- </section> --}}

		</div>
	
      </div>	  
	{{-- </div>
	
  </div> --}}
  
  </div>
{{-- </section> --}}
<!-- ================ End Profile Settings ======================= --> 
@endsection
@section('jquery')
<script>
    function printableDiv(printableAreaDivId) {
     var printContents = document.getElementById(printableAreaDivId).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
    
@endsection






  