@extends('front.layout')
@section('content')
<div class="page-title">
    <div class="container">
      <div class="page-caption">
        {{-- <h2>Add new Order</h2> --}}
        <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i></p>
      </div>
    </div>
  </div>
<!-- ================ Profile Settings ======================= -->
<section class="padd-top-80 padd-bot-80">
  <div class="container">
    <div class="row"> 
      <div class="col-md-3">
		<div id="leftcol_item">
		  {{-- <div class="user_dashboard_pic"> <img alt="user photo" src="{{//asset('photos/profile/'.$data->photo)}}"> <span class="user-photo-action">{{ //Auth::user()->name }}</span> </div> --}}
		</div>
        @include('front.dashSidebar')
      </div>


      
      <div class="col-md-8 col-xl-6" style="margin-top: 100px;margin-bottom: 50px">
       
        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align: center;">Expired Deadline</h1>
                <table class="table table-bordered">
                    <tr>
                        <td>Sl</td>
                        <td>Merchant Company</td>
                        <td>Seller Company</td>
                        <td>Machine Name</td>
                        <td>Title</td>
                        <td>Budget</td>
                        <td>Advance Amount</td>
                        <td>Quantity</td>
                        <td>Deadline</td>
                       

                        
                    </tr>
                    @foreach($deal as $k=>$d) 
                    <tr>
                       
                        <td>{{++$k}}</td>
                        <td>{{$d->workorderID->companies->name}}</td>
                        <td>{{$d->machinepostID->usermachine->companyName->name}}</td>
                        <td>{{$d->machineID->name}}</td>
                        <td>{{$d->title}}</td>
                        <td>{{$d->budget}}</td>
                        <td>{{$d->advance_amount}}</td>
                        <td>{{$d->quantity}}</td>
                        <td><h5 class="bg-danger">{{"Expired dated:  "}}{{$d->deadline}}</h5></td>
                     
                       
                    </tr>
                    @endforeach
                    
                </table>

            </div>
           

                
                {{-- <div class="progress">
                    <div class="progress-bar bg-danger" style="width:50%;">
                    
                    
                    </div>
                  </div> --}}
           
           
          
        </div>
   

        </div>


     

	 </div>
     
   
		  
	
 </div>
 
</section>
<!-- ================ End Profile Settings ======================= --> 
@endsection

