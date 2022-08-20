@extends('admin/layout')

@section('content')

<div class="row">
    <div class="col-sm-7">
        <div class="card">
       
            <div class="card-header">
                <h3 class="card-title">Update Delivery Man</h3>
                <h4 style="color: red">{{session('status')}}</h4>
            </div>
            <div class="card-body">
            <a href="{{route('dealList')}}" class="btn btn-primary"><i class=" fas fa-arrow-left"></i></a><br>
                <form action="{{route('update_delivery',$delivery->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="hidden" value="{{$delivery->id}}" name="id">
                    <table class="table table-bordered">
                        <tr>
                            <td>
                            <label for="">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$delivery->name}}">
                                @error('name')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                        
                        </tr>
                        <tr>
                            <td>
                               <label for="">Phone</label> 
                            <input type="text" class="form-control" id="name" name="phone" value="{{$delivery->phone}}">
                                @error('phone')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="">Photo</label>
                            <input type="file" class="form-control" id="received_by" name="photo" value="">
                                @error('photo')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
        
                        <tr>
                            <td>
                                <label for="">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="active" @if($delivery->status == 'active'){{'selected'}} @endif>Active</option>
                                    <option value="inactive" @if($delivery->status == 'inactive'){{'selected'}} @endif>Inactive</option>
                                    <option value="pending"  @if($delivery->status == 'pending'){{'selected'}} @endif>Pending</option>
                                </select>
                             
                                @error('status')
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
            <!-- card-body -->
        </div>
        <!-- card -->
    </div>
    <!-- col -->
</div>
                   <!-- End row -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

@endsection