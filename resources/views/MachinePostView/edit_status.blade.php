@extends('front.layout')
@section('content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  

<div class="page-title">
    <div class="container">
      <div class="page-caption">
             <h2>Machine Status</h2> 
        <p><a href="{{route('dashboard')}}" title="User Dashboard">User Dashboard</a> <i class="ti-angle-double-right"></i>Machine Status</p>
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
            <div class="col-md-12 ">
            
            <div class="col-md-9 col-sm-12 col-xs-12">
              <h4>Machine status Edit ( Busy Or Available ) </h4>
          <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>  
              
          <form action="{{route('update_status',$info->id)}}" method="post">
            @csrf
            @method('PUT')

            <table class="table table-hover">
              <tr>
                  <th>Title</th>
              <td><input type="text" value="{{$info->title}}" name="title" class="form-control"></td>
          
            </tr>
            
            <tr>
            <th>Number of Machines</th>
            <td><input type="text" value="{{$info->number_of_machine}}" name="number_of_machine" class="form-control"></td>
        

            </tr>
            <tr id="hi">
              <th>Available of Machines</th>
              <td><input type="text" value="{{$info->number_of_available}}" name="number_of_available"  id="busy" class="form-control"></td>
          

              </tr>
          
            <tr>
              <th>Status</th>
              <th>
                  


          <input type="radio" value="busy" name="status" id="test" class="form-check-input">&nbsp;  Busy
          <input type="radio" value="available" name="status" id="inun" style="text-align: right;" class="form-check-input"> &nbsp; Available<span id="show" ></span>
          
          
          


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
                
                $('#add').hide();
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
            
                <th colspan="2"><input type="hidden" value="{{$info->number_of_available}}" name="number_of_available"> <span id="show"></span></th>
            

                </tr> --}}
              <tr>
           
                <th colspan="2">
                    

            <input type="submit" value="Update" class="btn btn-success btn-block">
             </th>
            

                </tr>

            </table>

          </form>



          </div>
            </div>
          
        </div>

    </div>

		</div>
	
      </div>	  
	

</section>

<!-- <script>
  $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url : "{{ url('saveToken') }}",
        data : {'token' : token},
        type : 'GET',
        dataType : 'json',
        success : function(result){

            console.log("===== " + result + " =====");

        }
    });
</script> -->
<!-- ================ End Profile Settings ======================= --> 
@endsection







  