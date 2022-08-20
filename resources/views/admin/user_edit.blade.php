@extends('admin/layout')

@section('content')
<br><br>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> Add User Form</h3>
            </div>
            <div class="card-body">
                <form action="{{route('store_user',$id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" value="{{$id}}" name="company_id">
                    <table class="table table-bordered">
                        <tr>
                            <td>
                                 <label for="">User Name</label> 
                                <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}">
                                @error('name')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                <label for=""> Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{$data->email}}">
                                @error('email')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="">Phone</label> 
                                <input type="text" class="form-control" id="phone" name="phone" value="{{$data->phone}}">
                                @error('phone')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                <label for="">Photo</label> 
                                <input type="file" name="photo" id="photo" class="form-control">
                                @error('photo')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Designation</label> 
                                <input type="text" class="form-control" id="designation" name="designation" value="{{$data->designation}}">
                                @error('designation')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                <label for="">Password</label> 
                                <input type="text" class="form-control" id="password" name="password" value="{{$data->password}}" disabled>
                                <input type="hidden" class="form-control" id="password" name="password" value="{{$data->password}}" >
                                @error('password')
                                <span style="color:red">{{$message}}</span>
                                @enderror

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input type="submit" value="Submit" class="btn btn-primary btn-block"></td>

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

@endsection
