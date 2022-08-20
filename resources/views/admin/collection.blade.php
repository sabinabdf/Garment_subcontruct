@extends('admin/layout')

@section('content')

<div class="row">
    <div class="col-sm-7">
        <div class="card">
       
            <div class="card-header">
                <h3 class="card-title">Form validations</h3>
                <h4 style="color: red">{{session('status')}}</h4>
            </div>
            <div class="card-body">
            <a href="{{route('dealList')}}" class="btn btn-primary"><i class=" fas fa-arrow-left"></i></a><br>
                <form action="{{route('show_collection')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$id}}" name="deal_id">
                    <table class="table table-bordered">
                        <tr>
                            <td>
                            Amount
                                <input type="text" class="form-control" id="name" name="amount" value="{{old('amount')}}">
                                @error('name')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                        
                        </tr>
                        <tr>
                            <td>
                               <label for="">Collection Date</label> 
                            <input type="date" class="form-control" id="name" name="collection_date" value="{{old('collection_date')}}">
                                @error('category_id')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="">Recieved By</label>
                            <input type="text" class="form-control" id="received_by" name="received_by" value="{{old('name')}}">
                                @error('category_id')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
        
                        <tr>
                            <td>
                                <label for="">Status</label>
                                <select name="" id="" class="form-control">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                    <option value="pending" selected>Pending</option>
                                </select>
                             
                                @error('brand')
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