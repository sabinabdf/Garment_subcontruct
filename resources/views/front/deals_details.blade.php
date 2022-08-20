@extends('front.layout')
@section('content')
<style type="text/css">
    i{
        color: green;
        
    }
</style>
<div class="page-title">
    <div class="container">
      <div class="page-caption">
        <h2>Deals Details</h2> 
        <p><a href="#" title="Home">User Dashboard</a> <i class="ti-angle-double-right"></i>Deals Details</p>
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
      <a href="{{route('deal_list')}}" class="btn btn-md " style="width:10%;background:#548CA8;color:white;"><i class="fas fa-arrow-left" style="color:white"></i>&nbsp;&nbsp;Back</a>
      <a href="{{route('chating',$deals->id)}}"  class="btn btn-xs " style="width:10%;background:#548CA8;color:white">Send Message</a>

      <?php //print_r($request);exit; ?>

                            @if ($deals->status=='completed')
                            @if ($request=='not send')
                                <a href="#" class="btn btn-xs btn-danger" id="send" onclick="return confirm('Request Already Send')" style="width:12%;">Delivery Request Sent</a>
                            @elseif($request=='send')
                            <a href="{{route('deliveryRequest',$deals->id)}}"  class="btn btn-xs " style="width:13%;background:#4A702A;color:white">Send Delivery Request </a>
                                <!-- <a href="{{route('deliveryRequest',$deals->id)}}" class="btn btn-xs btn-primary">Delevery Request</a> -->
                            @endif
                            
                            @endif

                            @if ($deals->status=='completed')
                            <a href="{{route('dealOverview',$deals->id)}}"  class="btn btn-xs " style="width:10%;background:#548CA8;color:white">Overview</a>
 
                        @endif
     
      <!-- <a href="{{route('add_feedback',$deals->id)}}"  class="btn btn-xs " style="width:10%;background:#548CA8;color:white">Feedback</a> -->
      @if($deals->status !='completed')
             @if(Auth::user()->name)
                    @if($deals->marchant->id ==Auth::user()->company_id )
      <a href="{{route('add_milestone',$deals->id)}}"  class="btn btn-xs " style="width:10%;background:#548CA8;color:white">Add Milestone</a>
                    @endif
             @endif
      @endif
      @if($deals->status !='completed')
             @if(Auth::user()->name)

      <a href="{{route('progress_milestone',$deals->id)}}"  class="btn btn-xs " style="width:10%;background:#548CA8;color:white">Milestone List</a>

             @endif
      @endif

      @if($deals->status !='completed')
             @if(Auth::user()->name)
                    @if($deals->seller->id ==Auth::user()->company_id )

      <a href="{{route('milestone_feedback',$deals->id)}}"  class="btn btn-xs " style="width:12%;background:#548CA8;color:white">Milestone Feedback</a>
                    @endif
             @endif
      @endif
      <a href=""  class="btn btn-xs " style="width:10%;background:#548CA8;color:white">Payment A/C</a>
      <a href="{{route('payment_report',$deals->id)}}"  class="btn btn-xs " style="width:10%;background:#548CA8;color:white">Payment Report</a>

      
      <div class="col-md-8 col-xl-6" style="margin-top: 100px;margin-bottom: 50px">
            
        <div class="row">
           

            <div class="col-md-4">
             
                <img src="{{asset('photos/deals/deal.png')}}" alt="" class="img-responsive">
                {{-- {{url('uploads/'.$userMachine->photo)}} --}}
            </div>
            <div class="col-md-8">
                <h5>Deal Details</h5>
                <table class="table">
                    <tr>
                        <td>Merchant Company Name</td>
                        <td> {{$deals->marchant->name}} </td>
                      
                    </tr>
                    <tr>
                        <td>Seller Company Name</td>
                        <td>{{$deals->seller->name}}</td>
                        
                       
                    </tr>
                    <tr>
                        <td>Machine name</td>
                        <td>{{$deals->usermachineID->machine->name}}</td>
                        
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td>{{$deals->title}}</td>
                        
                        
                    </tr>
                    <tr>
                        <td>Budget</td>
                        <td>{{$deals->budget}}</td>
                        
                    </tr>
                    <tr>
                        <td>Advance Amount</td>
                        <td>{{$deals->advance_amount}}</td>
                       
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td>{{$deals->quantity}}</td>
                       
                    </tr>
                    <tr>
                        <td>Deadline</td>
                        <td>{{$deals->deadline}}</td>
                       
                    </tr>
                </table>

            </div>
          
        </div>

    </div>

     
     <section class="padd-bot-80">
    <div class="container" style="margin-top:50px">
        
        <div class="col-md-8">
            <h4>Specifications</h4><hr>
            <table class="table">
                @php
                 $data = json_decode($deals->specifications);
                @endphp
                @foreach ( $data as $key=>$value)
                <tr>
                   
                    <td>Specification Title</td>
                    
                   
                    <td>Specification value</td>
                    
                    
                </tr>
                <tr>
                   
                    <td>{{$key}}</td>
                    
                   
                    <td>{{$value}}</td>
                    
                    
                </tr>
                @endforeach
            </table>

        </div>
        <div class="col-md-8" style="margin-left: 295px ;margin-top:5px">
            <h4>More Details</h4><hr>
            <table class="table">
                <tr>
                    <td>Quality</td>
                    <td>{{$deals->quality_related}}</td>
                    
                </tr>
                <tr>
                    <td>Created Date</td>
                    <td>{{$deals->created_at}}</td>
                   
                </tr>
                <tr>
                    <td>Status</td>
                    <td>{{$deals->status}}</td>
                   
                </tr>

            </table>
            <div >
                <!-- shimo -->
            <div class="row">
            @foreach($feedback as $key =>$value)
               @if($value->seller_id == '')
               <div class ="col-md-6"> 
                    <h2>Merchant Feedback</h2>
                     <p>{{$value->message}}</p>
                    <p>
                        @if($value->stars==1)
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        @elseif($value->stars==2)
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        @elseif($value->stars==3)
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        @elseif($value->stars==4)
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        @elseif($value->stars==5)
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        @endif
                        <i>{{$value->stars}} out of 5</i>

                    </p>
                </div>
                @elseif($value->merchant_id == '')
                <div class ="col-md-6"> 
                    <h2>Seller Feedback</h2>
                    <p>{{$value->message}}</p>
                    <p>
                        @if($value->stars==1)
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        @elseif($value->stars==2)
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        @elseif($value->stars==3)
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        @elseif($value->stars==4)
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        @elseif($value->stars==5)
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        @endif
                        <i>{{$value->stars}} out of 5</i>
                </div>
                @endif
            @endforeach

            </div>


        </div>

        </div>
        <!-- //shimo -->
        
    </div>
</section>

		</div>
	
      </div>	  
	{{-- </div>
	
  </div> --}}
  
 
</section>
<!-- ================ End Profile Settings ======================= --> 
@endsection







  