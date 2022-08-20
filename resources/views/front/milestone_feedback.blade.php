@extends('front.layout')
@section('content')
    <!-- ======================= Page Title ===================== -->
    <div class="page-title">
        <div class="container">
          <div class="page-caption">
            <h2>Milestone Feedback</h2>
            <p><a href="#" title="Home">User Dashboard</a> <i class="ti-angle-double-right"></i>Milestone Feedback</p>
          </div>
        </div>
      </div>
    <!-- ======================= End Page Title ===================== -->

    <!-- ================ Profile Settings ======================= -->
    <section class="padd-top-80 padd-bot-80">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div id="leftcol_item">
                        <div class="user_dashboard_pic"> <img alt="user photo"
                                src="{{ asset('photos/profile/' . $data->photo) }}"> <span class="user-photo-action">
                                {{ Auth::user()->name }}</span> </div>
                    </div>
                    @include('front.dashSidebar')
                </div>
                <a href="{{route('dashboard')}}" class="btn btn-md " style="width:10%;background:#548CA8;color:white"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
                <h3>Add Milestone</h3>
                <div class="col-md-6">
              
                    <div class="profile_detail_block">
                        <div class="card">

            
 
                    <form action="{{route('add_milestone_feedback',$id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" value="{{$id}}" name="jobschedule_id">
                    <table class="table table-bordered">
                        
                        
                        <tr>

      
                            <td>
                                <labeL>Upload Design Photo</labeL>   
                                <input type="file" name="photo" id="photo" class="form-control">
                                @error('photo')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>

                           
                        </tr>
                        <tr>

                                    
                                <td>
                                    <labeL>Upload Design Video</labeL>   
                                    <input type="file" name="vedio" id="photo" class="form-control">
                                    @error('vedio')
                                    <span style="color:red">{{$message}}</span>
                                    @enderror
                                </td>


                         </tr>

    
                        </tr>

                        <tr>
                        
                        <td >
                            <label for="">Feedback</label>
                            <input type="text" name="feedback" class="form-control">
                            @error('feedback')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                        </td>
                        
                       
                           
                           
                        </tr>
                        <tr>
                        <td><input type="submit" value="Submit" class="btn btn-primary btn-block"></td>

                        </tr>
                    </table>
                </form>
                <!-- .form -->
                    </div>
                    
                </div>
                <!-- other table start  -->
              
                <!-- other table start  -->
                </div>

                
            </div>
        </div>
    </section>
    <!-- ================ End Profile Settings ======================= -->
@endsection