@extends('front.layout')
@section('content')
<div class="page-title">
    <div class="container">
      <div class="page-caption">
        <h2>Milestone Details</h2> 
        <p><a href="{{route('dashboard')}}" title="Home">User Dashboard</a> <i class="ti-angle-double-right"></i>Milestone Details</p>
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
      
      @if ($jobsChedule->status=='completed')
        <a href="" class="btn btn-xs btn-info" style="width:10%;background:#548CA8;color:white">Overview</a>
      @endif

      @if ($jobsChedule->status=='active')
        <a href="{{route('milestone_feedback',$id)}}" class="btn btn-xs btn-success" style="width:10%;background:#548CA8;color:white">Add Feedback</a>
      @endif

      <a href="" class="br-right"><button onclick="printableDiv('printableArea')" class="btn btn-md br-right" style="width:10%;background:#548CA8;color:white"><i class="fas fa-print">&nbsp;&nbsp;Print</i></button>  

                <div id="printableArea">
<br><br><br>
      <div class="col-md-8 col-xl-6" style="margin-top: 20px;margin-bottom: 50px">
            
        {{-- <div class="row"> --}}
           

            <div class="col-md-4">
            <br><br>
            @if($design)
                @foreach($design as $d)
                  @if($d->jobschedule_id == $jobsChedule->id)
             <img src="@if($d){{asset('photos/milestone/'.$d->photo)}} @else {{asset('photos/deals/workorder.jpg')}} @endif" alt="" class="img-responsive"> 
                  @endif
                @endforeach
             @endif
           
                {{-- {{url('uploads/'.$userMachine->photo)}} --}}
            </div>
            <div class="col-md-8">
                <h3>Milestone Details</h3>

                @if($design)
                @foreach($design as $d)
                  @if($d->jobschedule_id == $jobsChedule->id)
            
                 
                <table class="table">
                    <tr>
                        <th>Design  Title</th>
                        <td>  {{$d->title}}</td>
                      
                    </tr>
                    <tr>
                        <th>Milestone Title</th>
                        <td>  {{$jobsChedule->title}}</td>
                      
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td> {{$jobsChedule->description}}</td>
                       
                    </tr>
                    <tr>
                        <th>FGeedback</th>
                        <td> {{$jobsChedule->feedback}}</td>
                        
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{$jobsChedule->status}}</td>
                        
                    </tr>
                   
                </table>
                @endif
                @endforeach
             @endif

            </div>
          
        {{-- </div> --}}

    </div>

     
     {{-- <section class="padd-bot-80"> --}}
    <div class="container" style="margin-top:50px">
        
        <div class="col-md-8">
            <h4>Specifications</h4><hr>
           <!-- table start arif -->
           <table class="table">
                    <tr>
                        <td>Milestone Title</td>
                        <td>  {{$jobsChedule->title}}</td>
                      
                    </tr>
                    <tr>
                        <td>Desdcription</td>
                        <td> {{$jobsChedule->description}}</td>
                       
                    </tr>
                    <tr>
                        <td>FGeedback</td>
                        <td> {{$jobsChedule->feedback}}</td>
                        
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>{{$jobsChedule->status}}</td>
                        
                    </tr>
                   
                </table>
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






  