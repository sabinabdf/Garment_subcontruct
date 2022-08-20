@extends('admin/layout')

@section('content')

<div class="row">
    <div class="col-sm-7">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Machine Post</h3>
                <h4 style="color: red">{{session('status')}}</h4>
            </div>
            <div class="card-body">
                <form action="{{route('machine_post_update',$machinepost->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <table class="table table-bordered">
                        <tr>
                            <td>
                            <label for="">Machine Post Title</label>
                                <input type="text" class="form-control" id="name" name="title" value="{{$machinepost->title}}">
                                @error('name')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                          
                        </tr>

                                <td>
                                    <label for="">User Machine Title</label>
                                    <input type="text" class="form-control" id="specifications"  value="{{$machinepost->usermachine->title}}">
                                    <input type="hidden" class="form-control" id="specifications" name="usermachine_id" value="{{$machinepost->usermachine_id}}">
                                </td>
                              
                            </tr>

                        <tr>
                            <td>
                                <label for="">Number of Machine</label>
                                <input type="text" class="form-control" id="brand" name="number_of_machine" value="{{$machinepost->number_of_machine}}">
                                @error('brand')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                           
                        </tr>
                        <tr>
                            <td>
                                <select name="status" id="" class="form-control">

                                    <option value="active" @if($machinepost->status == 'active') {{'selected'}}@endif>Active</option>
                                    <option value="inactive" @if($machinepost->status == 'inactive') {{'selected'}}@endif>Inactive</option>
                                    <option value="pending" @if($machinepost->status == 'pending') {{'selected'}}@endif>Pending</option>
                                </select>
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

@endsection