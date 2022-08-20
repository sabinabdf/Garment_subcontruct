@extends('front.layout')
@section('content')
<!-- ======================= Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Busy or Available machine status</h2>
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
                
                {{-- <li ><a href="{{route('/edit_status')}}"><i class="login-icon ti-user"></i> Choose Your Option</a></li> --}}
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
     
        <div class="col-md-9 col-sm-12 col-xs-12">Edit Busy Or Available </h4>
          <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>  
              
          <form action="{{route('update_status',$data->id)}}" method="post">
            @csrf
            @method('PUT')

            <table class="table table-bordered">
              <tr>
                  <th>Title</th>
              <th><input type="text" value="{{$data->title}}" name="title"></th>
          
            </tr>
            
            <tr>
            <th>Number of Machines</th>
            <th><input type="text" value="{{$data->number_of_machine}}" name="number_of_machine"></th>
        

            </tr>
            <tr id="hi">
              <th>Available of Machines</th>
              <th><input type="text" value="{{$data->number_of_available}}" name="number_of_available"  id="busy"></th>
          

              </tr>
          
            <tr>
              <th>Status</th>
              <th>
                  {{-- <input type="radio" value="{{if ($data->status==busy){
                    checked
                  }}}" name="status">Busy 

          <input type="radio" value="{{if ($data->status==available){
            checked;
            <form action="{{route('status_insert')}}" method="post">
                <input> 
              </form>
          }}}" name="status">available --}}


          <input type="radio" value="busy" name="status" id="test">Busy
          <input type="radio" value="available" name="status" id="inun" style="text-align: right;">Available<span id="show"></span>
          
          
          


          <script>
            $(document).ready(function(){
              $('#inun').click(function(){
                // alert('are you');
                $('#show').html("<input type='number' name='number_of_available' id='add' placeholder='Available'>");
               
                //  $("#add").click("");
              });
              $('#test').click(function(){
                $('#hi').hide();
               
              })

              $("#test").click(function(){
                $("#busy").val("0");
                });


             
            });

            // $(document).ready(function(){
            //   $('#test').click(function(){
               
            //     $('#hide').html("<input type='number' name='number_of_available' id='add' placeholder='Available'>");
            //     $('#inun').
            //     //  $("#add").click("");
            //   });
            // });
          </script>
           </th>
          

              </tr>
              {{-- <tr>
            
                <th colspan="2"><input type="hidden" value="{{$data->number_of_available}}" name="number_of_available"> <span id="show"></span></th>
            

                </tr> --}}
              <tr>
           
                <th colspan="2">
                    

            <input type="submit" value="Edit">
             </th>
            

                </tr>

            </table>

          </form>



          </div>

    </div>
  
  </div>
</section>
<!-- ====================== End Job Detail 2 ================ --> 

@endsection