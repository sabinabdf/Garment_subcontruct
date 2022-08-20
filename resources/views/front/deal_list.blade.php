@extends('front.layout')
@section('content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  

<div class="page-title">
    <div class="container">
      <div class="page-caption">
         <h2>Deal List</h2> 
        <p><a href="{{route('dashboard')}}" title="User Dashboard">User Dashboard</a> <i class="ti-angle-double-right"></i>Deals List</p>
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

      <div class="col-md-9 col-xl-6" style="margin-top: 15px;margin-bottom: 50px">
      <a href="{{route('dashboard')}}" class="btn btn-md " style="width:12%;background:#548CA8;color:white;"><i class="fas fa-arrow-left" style="color:white"></i>&nbsp;&nbsp;Back</a>
        <div class="row">
           
            <div class="col-md-12">
                <h3>Deals list</h3>
                <table class="table table-bordered table-responsive">
                    <tr>
                        <td>Sl</td>
                        <td>Merchant Company</td>
                        <td>Seller Company</td>
                        <!-- <td>Machine Name</td> -->
                        <td>Title</td>
                        <td>Budget</td>
                        <td>Advance Amount</td>
                        <td>Quantity</td>
                        <td>Deadline</td>
                        <td>Expiry Reminders</td>
                        <td>Action</td>

                        
                    </tr>
                    @foreach ($deal_list as $k=>$list)
                    <tr>
                       
                        <td>{{++$k}}</td>
                        <!-- <td>{{$list->marchant->name}}</td> -->
                        <td>{{$list->seller->name}}</td>
                        
                        <td>{{$list->machine->machine->name}}</td>
                        <td>{{$list->title}}</td>
                        <td>{{$list->budget}}</td>
                        <td>{{$list->advance_amount}}</td>
                        <td>{{$list->quantity}}</td>
                        <td>{{$list->deadline}}</td>
                        <td>
                        <div class="progress">
  <?php
  if($list->status=='completed'){
    echo "<button style='background:green;color:#fff;'>Completed</button>";
  }else{
  if($list->created_at == null){
    echo " 0 %";
  }else{
    $startDate = strtotime($list->created_at->format('m/d/Y'));
    $endDate = strtotime($list->deadline);
    $totalDays = ($endDate - $startDate)/86400;
    $spendDays = strtotime(date('m/d/Y'));
    $spendTotalDays = ($spendDays - $startDate)/86400;
    if($totalDays==0){
      $count1 = $spendTotalDays / 1;
    }else{
      $count1 = $spendTotalDays / $totalDays;
    }
    
    $count2 = $count1 * 100;
    $count = number_format($count2, 0);
    ?>
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $count;?>%; <?php  if($count<50){echo "background-color: green";}elseif($count<90){echo "background-color: yellow;color: black";}else{echo "background-color: red";}?>;">
    <?php } } ?>
  </div>
</div>                                        </td>
                        <td>
                        <!-- <a href="{{route('chating',$list->id)}}" class="btn btn-xs btn-primary">Send Message</a> -->
                        <!-- @if ($list->status=='completed')
                        <a href="{{route('add_feedback',$list->id)}}" class="btn btn-xs btn-primary">Feedback</a>
                        @endif -->
                         
                            
                            <!-- <a href="{{route('edit_deals',$list->id)}}" class="btn btn-xs btn-success">Edit</a> -->

                            <!-- <a href="{{route('edit_deals',$list->id)}}" class="btn btn-xs btn-primary">Ad</a> -->


                            
                            @if ($list->status=='completed') 
                                    @if ($request=='not send')
                                        <a href="#" class="btn btn-xs btn-danger" id="send" onclick="return confirm('Delivery Request Already Send !!!')" data-bs-toggle="tooltip" data-bs-placement="top" title="Delivery Request Already Sent"><i class="fas fa-paper-plane" ></i></a>
                                    @elseif($request=='send')   
                                       <a href="{{route('deliveryRequest',$list->id)}}" class="btn btn-xs btn-primary"  ><i class="fas fa-paper-plane" ></i></a>
                                    @endif
                                    
                            @endif
                            <!-- <a href="{{route('admin_edit_workorder',$list->id)}}" class="btn btn-primary btn-xs a"><i class="fas fa-edit"></i></a> -->
                                        
                                        <a href="{{route('deal_details',$list->id)}}" class="btn btn-info btn-xs a" data-bs-toggle="tooltip" data-bs-placement="top" title="View Deal Details "><i class=" fas fa-eye"></i></a>
                                        @if ($list->status=='completed') 
                                        <a href="{{route('add_feedback',$list->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                        @endif
                                        <form action="{{route('delete_deals',$list->id)}}" method="post"
                                            style="display: inline-block">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-xs"
                                                onclick="return confirm('Are You Sure !!!')" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Deal"> <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>


                            <!-- <a href="{{route('deal_details',$list->id)}}" class="btn btn-xs btn-info">View</a>
                            <form action="{{route('delete_deals',$list->id)}}" method="post">
                              
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure ?')">

                            </form> -->
                            <?php //print_r($request);exit; ?>
                <!-- @if ($list->status=='completed')
                   <a href="{{route('dealOverview',$list->id)}}" class="btn btn-xs btn-info">Overview</a>
                   
                 @endif -->
    
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







  