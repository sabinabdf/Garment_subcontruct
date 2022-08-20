@extends('front.layout')
@section('content')
<div class="page-title">
    <div class="container">
      <div class="page-caption">
         <h2>Feedback List</h2> 
        <p><a href="{{route('dashboard')}}" title="User Dashboard">User Dashboard</a> <i class="ti-angle-double-right"></i>Feedback List</p>
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
        <a href="{{route('dashboard')}}" class="btn btn-md " style="width:12%;background:#548CA8;color:white;"><i class="fas fa-arrow-left" style="color:white"></i>&nbsp;&nbsp;Back</a>
            <div class="col-md-12">
                <h3>I have send this feedback</h3>
                <table class="table table-bordered">
                    <tr>
                        <td>Sl</td>
                        <td>Company Name</td>
                        <td>Star</td>
                        <td>Message</td>
                        <td>Action</td>

                        
                    </tr>
                    @foreach ($feedbackList as $k=>$list)
                    <tr>
                       
                        <td>{{++$k}}</td>
                        @if($list->merchant_id =='')
                        <td>{{$list->deal->marchant->name}}</td>
                        @elseif($list->seller_id =='')
                        <td>{{$list->deal->seller->name}}</td>
                        @endif
                        
                        <td>{{$list->stars}}</td>
                        <td>{{$list->message}}</td>
                        <td>
                           
                            
                            <a href="{{route('feedback_edit',$list->id)}}" class="btn btn-xs btn-success">Edit</a>
                            
                            
                            <form action="{{route('feedback_delete',$list->id)}}" method="post">
                              
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="btn btn-xs btn-danger" >

                            </form>
                          
                            
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







  