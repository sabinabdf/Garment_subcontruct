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
                
              <form action="{{route('feedback_update',$showFeedback->id)}}" method="post">
              
                @csrf
                @method('put')
                <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                        <label for="c">Star</label>
                        <input name="stars" type="number" value="{{$showFeedback->stars}}" class="form-control" onkeyup="MaxStar()" onclick="MaxStar()" id="maxData">
                        @error('stars')
                           <p style="color:red">{{$message}}</p>
                        @enderror
                        
                    </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                        <label for="d">Message</label>
                        <input name="message" type="text"  value="{{$showFeedback->message}}" class="form-control" id="d" >
                        @error('message')
                           <p style="color:red">{{$message}}</p>
                        @enderror
                  </div>
                </div>
                </div>
                
              </div>
                
                    
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
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







  