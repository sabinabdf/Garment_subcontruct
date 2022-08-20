@extends('front.layout')
@section('content')
<div class="page-title">
    <div class="container">
      <div class="page-caption">
        <h2>Machine Post Details</h2>
        <p><a href="#" title="Home">Dashboard</a> <i class="ti-angle-double-right"></i>Machine Post Details</p>
      </div>
    </div>
  </div>
<!-- ================ Profile Settings ======================= -->
<section class="padd-top-80 padd-bot-80">
      <div class="container">
            <div class="row"> 
                            <div class="col-md-3">
                                <div id="leftcol_item">
                                  <div class="user_dashboard_pic">
                                    <img alt="user photo" src="{{asset('photos/profile/'.$data->photo)}}"> 
                                    <span class="user-photo-action">{{ Auth::user()->name }}</span> 
                                  </div>
                              </div>
                                  @include('front.dashSidebar')
                          </div>
                          <div class="col-md-">

                                <a href="{{route('machinepost_view')}}" class="btn btn-md " style="width:10%;background:#548CA8;color:white">
                                    <i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Back
                                </a>
                                <br>
                                <div class="col-md-8 col-xl-6" style="margin-top: 100px;margin-bottom: 50px">
                                      
                                  <div class="row">
                                    

                                      <div class="col-md-4">
                                      
                                          <img src="{{url('/'.$d->Usermachines->Machine->photo)}}" alt="" class="img-responsive">
                                          {{-- {{url('uploads/'.$userMachine->photo)}} --}}
                                      </div>
                                      <div class="col-md-8">
                                          <h5>Machine Post Details </h5>
                                          <table class="table">
                                              <tr>
                                                  <td>Company Name</td>
                                                  <td> {{$d->Usermachines->Company->name}}</td>
                                                
                                              </tr>
                                              <tr>
                                                  <td>Category Name</td>
                                                  <td>{{$d->Usermachines->Category->name}}</td>
                                                
                                              </tr>
                                              <tr>
                                                  <td>Machine name</td>
                                                  <td>{{$d->Usermachines->Machine->name}}</td>
                                                  
                                              </tr>
                                              <tr>
                                                  <td>Title</td>
                                                  <td>{{$d->Usermachines->title}}</td>
                                                  
                                              </tr>
                                              <tr>
                                                  <td>Brand</td>
                                                  <td>{{$d->Usermachines->brand}}</td>
                                                  
                                              </tr>
                                            
                                            
                                          </table>

                                      </div>

                                           
                                      </div>
                                      </div>
                                    <!-- similar start  -->
                                      <!-- similar start -->
                                    
                          <div class="col-md-9" style="padding-top:100px">
                                  <div id="dashboard_listing_blcok">

                              <div class="detail-wrapper">
                                <div class="col-md-12">
                                    <h4 class="mrg-bot-30">Suggested Work Post</h4>
                                </div>
                                    <div class="detail-wrapper-body">
                                      
                                    
                              {{-- similar Post start --}}
                              
                                  
                                        
                                @if($work_order)
                                  @foreach($work_order as $work)
                                    @if($work->machine_id == $a)
                                  
                                  
                              <div class="col-md-4 col-sm-6">
                                @php 
                                $date = date('d-m-Y', strtotime($work->created_at))
                                @endphp
                                  <div class="utf_grid_job_widget_area"> <span class="job-type full-type">Posted Date :&nbsp;{{$date}}&nbsp;&nbsp;</span>
                                    <div class="utf_job_like">
                                      <label class="toggler toggler-danger">
                                        <input type="checkbox" checked>
                                        <i class="fa fa-heart"></i> 
                                </label>
                                    </div>
                                    <div class="u-content">
                                      <div class="avatar box-80"> <a href="{{route('workOrderPostDetails',$work->id)}}"> <img class="img-responsive" src="{{asset('photos/company/'.$work->Companies->logo)}}" alt=""> </a> </div>
                                      <h5><a href="{{route('workOrderPostDetails',$work->id)}}">{{$work->title}}</a></h5>
                                      <p class="text-muted">Company : {{$work->Companies->name}}</p>
                                      <p class="text-muted">Budget : {{$work->budget}}</p>
                                      <p class="text-muted">Deadline : {{$work->deadline}}</p>
                                    </div>
                                    <div class="utf_apply_job_btn_item"> <a href="{{route('workOrderPostDetails',$work->id)}}" target="_blank" class="btn job-browse-btn btn-radius br-light">View Work Order</a> </div>
                                  </div>
                                </div>
                                    
                              
                                <!-- Single Job -->

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
            </div>
      </div>	  

              
 
</section>
<!-- ================ End Profile Settings ======================= --> 
@endsection