@extends('front.layout')
@section('content')
<div class="page-title">
    <div class="container">
      <div class="page-caption">
        {{-- <h2>Add new Order</h2> --}}
        <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i>Feedback</p>
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
           
            <div class="col-md-12">
                <h3>Feedback</h3>
                
              <form action="{{route('save_feedback')}}" method="post">
              
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="hidden" name="deal_id" value="{{$deal_list->id}}">
                      @if($yourCompanyId == $deal_list->merchant_id)
                      <label for="b">Seller Name</label>
                        <input  type="text" class="form-control" disabled id="b" value="{{$deal_list->seller->name}}">
                         <input type="hidden" name="merchant_id" value="{{$deal_list->merchant_id}}">
                        @endif
                        
                        
                        @error('seller_id')
                           <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                      @if($yourCompanyId == $deal_list->seller_id)
                      <label for="a">Merchant Name</label>
                        <input  type="text" class="form-control" id="a" disabled value="{{$deal_list->marchant->name}}" >
                        <input type="hidden" name="seller_id" value="{{$deal_list->seller_id}}">
                      @endif

                        @error('merchant_id')
                           <p style="color:red">{{$message}}</p>
                        @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <br>
                        <label for="c">Your Rating</label>
                        <input name="stars" type="number" class="form-control" onkeyup="MaxStar()" onclick="MaxStar()" id="maxData" >
                        @error('stars')
                           <p style="color:red">{{$message}}</p>
                        @enderror
                        
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                        <label for="d">Message</label>
                        <input name="message" type="text" class="form-control" id="d" placeholder="Please enter your feedback">
                        @error('message')
                           <p style="color:red">{{$message}}</p>
                        @enderror
                  </div>
                </div>
              </div>
                
                    
              @php 
                $checkFeedback = false
              @endphp
            @foreach($feedbackList as $key => $feedbackData)
            @if($yourCompanyId == $feedbackData->merchant_id || $yourCompanyId == $feedbackData->seller_id && $deal_list->id == $feedbackData->deal_id)
              @php
                $checkFeedback = true
              @endphp
            @else
              @php
              $checkFeedback = false
              @endphp
              @endif
            @endforeach

            @if($checkFeedback)
            <script>alert('Already you have send feedback for this deal')</script>
            @else
            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
            @endif
                </form>


            </div>
          
        </div>

     </div>

		</div>
	
  </div>	  
	

</section>

<script>
  function MaxStar(){
    var maxValue = document.getElementById('maxData').value;
    if(maxValue > 5){
      alert('Please enter less then 5');
    }
  }
</script>
<!-- ================ End Profile Settings ======================= --> 
@endsection







  