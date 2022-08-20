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
                <form action="{{route('save_userAdmin')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$id}}" name="company_id">
                    <table class="table table-bordered">
                        <tr>
                            <td>
                           User Name
                                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                                @error('name')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                Email
                                <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
                                @error('email')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Phone
                                <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}">
                                @error('phone')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                Photo
                                <input type="file" name="photo" id="photo" class="form-control">
                                @error('photo')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Designation
                                <input type="text" class="form-control" id="designation" name="designation" value="{{old('designation')}}">
                                @error('designation')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                Password
                                <input type="text" class="form-control" id="password" name="password" value="{{old('password')}}">
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
