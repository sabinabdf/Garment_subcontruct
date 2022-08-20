@extends('admin/layout')

@section('content')

<div class="row">
    <div class="col-sm-12">
     

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Workorder</h3></div>
            <div class="card-body">
                <div class="form">
                    <form class="cmxform form-horizontal tasi-form"  method="post" action=" {{route('admin_update_workorder',$edit_workorder->id)}}" enctype="multipart/form-data">
                       
                    @csrf
                    @method('PUT')    
                    <table class="table">
                            <tr>
                                <td><label for="name" class="">Company Name </label></td>
                                <td>
                                    <select name="company_id" id="" class="form-control">

                                        <option value="{{$edit_workorder->Companies->id}}">{{$edit_workorder->Companies->name}}</option>
                                     
                                        {{-- @foreach ($company as $com)
                                        <option value="{{$com->id}}">{{$com->name}}</option>
                                            
                                        @endforeach --}}
                                    </select>
                                    
                                </td>
                               
                                <td><label for="email" class="">Category Name</label></td>
                                <td>
                                    <select name="category_id" id="" class="form-control">
  
                                    <option value="{{$edit_workorder->Categories->id}}">{{$edit_workorder->Categories->name}}</option>
                                  
                                    @foreach ($category as $c)
                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                        
                                    @endforeach
                                </select>
                                    
                                </td>   
                               
                            </tr>

                            <tr>
                                <td><label for="name" class="">Machine Name</label></td>
                               <td>
                                <select name="machine_id" id="" class="form-control">
  
                                    <option value=" {{$edit_workorder->Machines->id}}">{{$edit_workorder->Machines->name}}</option>
                                    
                                    @foreach ($machine as $m)
                                    <option value="{{$m->id}}">{{$m->name}}</option>
                                        
                                    @endforeach
                                </select>
                                   
                                </td>
                              
                                <td><label for="email" class="">Title</label></td>
                                <td><input type="text" name="title" required   class="form-control" value="{{$edit_workorder->title}}"></td>
                                
                            </tr>
                            @php
                            $specData=json_decode($edit_workorder->specifications); 
                           //  print_r($specData);
                         @endphp
                            @foreach ($specData as $key=>$value)
                            <tr>
                                <td><label for="email" class="">Specification title </label></td>
                                <td><input class="form-control" type="text" name="spec_title[]" required  value="{{$key}}"></td>
                                <td><label for="profile" class="">Specification Value</label></td>
                                <td><input class="form-control" type="text" name="spec_value[]" required  value="{{$value}}"></td>
                                

                            </tr>
                            @endforeach

                            <tr>
                                 <td> <label for="email" class="">Budget</label></td>
                                	<!-- <input type="file" id="file" name="myfiles[]" multiple /> -->
                                <td><input class="form-control" type="text" name="budget" required  value="{{$edit_workorder->budget}}"></td>
                                <td><label for="profile" class="">Deadline </label></td>
                               <td> <input class="form-control" type="text" name="deadline" required value="{{$edit_workorder->deadline}}"></td>
                             
                            </tr>

                            <tr>
                                 
                                <td> <label for="profile" class="">Quantity</label></td>
                                <td><input class="form-control" type="text" name="quantity" required  value="{{$edit_workorder->quantity}}"></td>
                                <td> <label for="email" class="">Quality Related</label></td>
                                	<!-- <input type="file" id="file" name="myfiles[]" multiple /> -->
                                <td><input class="form-control" type="text" name="quality_related" required  value="{{$edit_workorder->quality_related}}"></td>
                                
                            </tr>
                            
                            <tr>
                            <!-- <td colspan="3"></td> -->
                            <td > <input type="reset" class="btn  btn-block btn-secondary waves-effect" value="Reset"></td>
                            <td colspan="2"><button class="btn btn-block btn-success waves-effect waves-light mr-1" type="submit">Update</button></td>
                              
                            </tr>

                        </table>
                    </form>
                </div>
                <!-- .form -->
            </div>
            <!-- card-body -->
        </div>
        <!-- card -->
    </div>
    <!-- col -->
</div>
@endsection