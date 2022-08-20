@extends('front.layout')
@section('content')
<!-- ======================= Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Matched Post</h2>
      <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i> Timeline</p>
    </div>
  </div>
</div>
<!-- ======================= End Page Title ===================== --> 

<!-- ====================== Start Job Detail 2 ================ -->
<section class="padd-top-80 padd-bot-80">
  <div class="container"> 
    <div class="row"> 
        <div class="col-md-3">
            <div id="leftcol_item">
              {{-- <div class="user_dashboard_pic"> <img alt="user photo" src="{{asset('photos/profile/')}}"> <span class="user-photo-action">  {{ Auth::user()->name }}</span> </div> --}}
            </div>
            <div class="dashboard_nav_item">
              <ul>
                <li><a href="{{route('machine_status')}}"><i class="login-icon ti-dashboard"></i> Available / Busy List</a></li>
                <li><a href="{{route('dashboard')}}"><i class="login-icon ti-dashboard"></i> Dashboard</a></li>
                
                {{-- <li ><a href="{{route('edit_status')}}"><i class="login-icon ti-user"></i> Choose Your Option</a></li> --}}
                <li><a href="{{route('c_pass')}}"><i class="login-icon ti-key"></i> Change Password</a></li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="login-icon ti-power-off"></i>
                        {{ __('Logout') }}
                    </a>
    
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                         </form>
                    <!-- <a href="#"><i class="login-icon ti-power-off"></i> Logout</a> -->
                </li>
              </ul>
            </div>
        </div>
      
      <!-- Start Job List -->
     
        <div class="col-md-9 col-sm-12 col-xs-12">
     
            <h4 style="text-align:center;">Matched Post</h4>
            <form action="">

                <table class="table table-bordered">
                  <tr>
                  <th>Sl</th>
                  <th>Company Name</th>
                  <th>Category Name</th>
                  <th>Machine Name</th>
                  <th>Title</th>
                  <th>Brand</th>
                  <th>Photo</th>
                 
                
                  <th>Status</th>
                  <th>Action</th>
              
                </tr>
                @foreach (  $machineposts as $k=>$d)
                <tr>
                  <td>{{++$k}}</td>
                  <td>{{$d->Usermachines->Company->name}}</td>
                  <td>{{$d->Usermachines->Category->name}}</td>
                  <td>{{$d->Usermachines->Machine->name}}</td>
                  <td>{{$d->Usermachines->title}}</td>
                  <td>{{$d->Usermachines->brand}}</td>
                <td><img src="{{$d->Usermachines->photo}}" alt=""></td>
                
       
                  <td>{{$d->status}}</td>
                  <td><a href="{{route('machinePosts_details',$d->id)}}">View Details</a></td>
                
                  
                </tr>
                @endforeach
                

                </table>

              </form>
         
          </div>

    </div>
    <!-- End Row --> 
  </div>
</section>
<!-- ====================== End Job Detail 2 ================ --> 




matchedPost.blade.php


@extends('front.layout')
@section('content')
<!-- ======================= Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Matched Post</h2>
      <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i> Timeline</p>
    </div>
  </div>
</div>
<!-- ======================= End Page Title ===================== --> 

<!-- ====================== Start Job Detail 2 ================ -->
<section class="padd-top-80 padd-bot-80">
  <div class="container"> 
    <div class="row"> 
        <div class="col-md-3">
            <div id="leftcol_item">
              {{-- <div class="user_dashboard_pic"> <img alt="user photo" src="{{asset('photos/profile/')}}"> <span class="user-photo-action">  {{ Auth::user()->name }}</span> </div> --}}
            </div>
            <div class="dashboard_nav_item">
              <ul>
                <li><a href="{{route('machine_status')}}"><i class="login-icon ti-dashboard"></i> Available / Busy List</a></li>
                <li><a href="{{route('dashboard')}}"><i class="login-icon ti-dashboard"></i> Dashboard</a></li>
                
                {{-- <li ><a href="{{route('edit_status')}}"><i class="login-icon ti-user"></i> Choose Your Option</a></li> --}}
                <li><a href="{{route('c_pass')}}"><i class="login-icon ti-key"></i> Change Password</a></li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="login-icon ti-power-off"></i>
                        {{ __('Logout') }}
                    </a>
    
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                         </form>
                    <!-- <a href="#"><i class="login-icon ti-power-off"></i> Logout</a> -->
                </li>
              </ul>
            </div>
        </div>
      
      <!-- Start Job List -->
     
        <div class="col-md-9 col-sm-12 col-xs-12">
     
            <h4 style="text-align:center;">Matched Post</h4>
            <form action="">

                <table class="table table-bordered">
                  <tr>
                  <th>Sl</th>
                  <th>Company Name</th>
                  <th>Category Name</th>
                  <th>Machine Name</th>
                  <th>Brand</th>
                  <th>Photo</th>
                 
                  <th>Deadline</th>
                  <th>Quantity</th>
                 
                  {{-- <th>Number of Available</th> --}}
                  <th>Quality Related</th>
                  <th>Status</th>
              
                  <th>Action</th>
                </tr>
                @foreach ($data as $k=>$d)
                <tr>
                  <td>{{++$k}}</td>
                  <td>{{$d->Companies->name}}</td>
                  <td>{{$d->Category->name}}</td>
                  <td>{{$d->Machine->name}}</td>
                  <td>{{$d->Machine->brand}}</td>
                 <td><img src="{{$d->photo}}" alt=""></td>
                
                  <td>{{$d->deadline}}</td>
               
                  {{-- <td>{{$d->number_of_available}}</td> --}}
                  <td>{{$d->quantity}}</td>
                  <td>{{$d->quality_related}}</td>
                  <td>{{$d->status}}</td>
                
                  <td>
                   <a href="{{route('order_details',$d->id)}}">View Details</a>
                  </td>
                </tr>
                @endforeach
                

                </table>

              </form>
         
          </div>

       
    </div>
    <!-- End Row --> 
  </div>
</section>
<!-- ====================== End Job Detail 2 ================ --> 