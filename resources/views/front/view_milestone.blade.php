@extends('front.layout')
@section('content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  

<div class="page-title">
    <div class="container">
      <div class="page-caption">
             <h2>List Milestone</h2> 
        <p><a href="#" title="Home">User Dashboard</a> <i class="ti-angle-double-right"></i>Lizt Milestone</p>
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
                <h3>Milestone list</h3>
                <table class="table table-bordered">
                
                <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Feedback</th>
                    <th>Action</th>
                </tr>

                    @foreach($jobshedule as $i=>$j)
            @if( $deal_id == $j->jobshedule_id)
                    
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$j->title}}</td>
                    <td>{{$j->description}}</td>
                    <td>{{$j->start_date}}</td>
                    <td>{{$j->end_date}}</td>
                    <td>{{$j->feedback}}</td>
                    <td>
                           
                           <a href="{{route('milestone_details',$j->id)}}" class="btn btn-xs btn-info">View</a>
                           
                           <a href="" class="btn btn-xs btn-success">Edit</a>
                          
                           
                           <form action="{{route('delete_milestone',$j->id)}}" method="post">
                             
                               @csrf
                               @method('delete')
                               <a href="{{route('milestone_delete',$j->id)}}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')">Delete</a>


                           </form>

                       </td>

                </tr>

         @endif
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







  