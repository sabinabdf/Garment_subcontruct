@extends('front.layout')
@section('content')
<div class="page-title">
    <div class="container">
      <div class="page-caption">
        {{-- <h2>Add new Order</h2> --}}
        <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i>Deals List</p>
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
                <h3>Deals list</h3>
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
                        <td>Action</td>

                        
                    </tr>
                    @foreach ($deal_list as $k=>$list)
                    <tr>
                       
                        <td>{{++$k}}</td>
                        <td>{{$list->marchant->name}}</td>
                        <td>{{$list->seller->name}}</td>
                        
                        <td>{{$list->machine->machine->name}}</td>
                        <td>{{$list->title}}</td>
                        <td>{{$list->budget}}</td>
                        <td>{{$list->advance_amount}}</td>
                        <td>{{$list->quantity}}</td>
                        <td>{{$list->deadline}}</td>
                        <td>
                           
                            <a href="{{route('deal_details',$list->id)}}" class="btn btn-xs btn-info">View</a>
                            
                            <a href="{{route('edit_deals',$list->id)}}" class="btn btn-xs btn-success">Edit</a>
                            
                            
                            <form action="{{route('delete_deals',$list->id)}}" method="post">
                              
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="btn btn-xs btn-danger" >

                            </form>
                            
                            <a href="{{route('add_feedback',$list->id)}}" class="btn btn-xs btn-primary">Feedback</a>
                          
                            
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







  