@extends('front.layout')
@section('content')
    <!-- ======================= Page Title ===================== -->
    <div class="page-title">
        <div class="container">
          <div class="page-caption">
            <h2>Update Milestone </h2>
            <p><a href="#" title="Home">User Dashboard</a> <i class="ti-angle-double-right"></i> Update Milestone</p>
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
                <a href="{{route('deal_list')}}" class="btn btn-md " style="width:10%;background:#548CA8;color:white;"><i class="fas fa-arrow-left" style="color:white"></i>&nbsp;&nbsp;Back</a>
                <h3>Update Milestone</h3>
                <div class="col-md-9">
                    
                    <div class="profile_detail_block">
                        <div class="card">
                    <form action="{{route('update_milestone',$id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$jobschedule->deal_id}}" name="deal_id">
                    <input type="hidden" value="{{$d->id}}" name="design_id">

                    <table class="table table-bordered">
                        <tr>
                            <td>
                                <label for="">Title</label>
                                <input type="text" class="form-control" id="name" name="title"  value="{{$jobschedule->title}}">
                                @error('name')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                    <label for="">Design Title</label>   
                                    <input class="form-control" id="specifications" name="design_title" value="{{$d->title}}">
                            </td> 
                           
                        </tr>
                        
                        <tr>

                            <td>
                                    <label for="">Description</label>
                                    <textarea  id="" cols="30" rows="2" class="form-control" name="description" >{{$jobschedule->description}}</textarea>

                            </td>
                            <td>
                                <labeL>Upload Design Image</labeL>   
                                <input type="file" name="design_photo" id="photo" class="form-control" value="{{$d->photo}}">
                                @error('photo')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>

                           
                        </tr>
                      
                        <tr>
                            <td>
                                <label for="">Start Date</label>
                                <input type="date" class="form-control" id="brand" name="start_date" value="{{$jobschedule->start_date}}">
                                @error('brand')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                               
                            
                            <td>
                            <label for="">End Date</label>
                            <input type="date" name="end_date" class="form-control" value="{{$jobschedule->end_date}}">
                        </td>
                        </tr>

                        <tr>
                        
                        <td colspan="2">
                            <label for="">Feedback</label>
                            <input type="text" name="feedback" class="form-control" value="{{$jobschedule->feedback}}">
                        </td>
                        
                       
                            <td>
                              
                                @error('photo')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                           
                        </tr>
                        <tr>
                        <td><input type="submit" value="Submit" class="btn btn-primary btn-block"></td>
                        <td></td>
                        </tr>
                    </table>
                </form>
                <!-- .form -->
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ End Profile Settings ======================= -->
@endsection