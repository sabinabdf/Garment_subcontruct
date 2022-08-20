@extends('admin/layout')

@section('content')

<div class="row">
    <div class="col-sm-7">
        <div class="card">
       
            <div class="card-header">
                <h3 class="card-title">Add Delivery Man</h3>
                <h4 style="color: red">{{session('status')}}</h4>
            </div>
            <div class="card-body">
            <a href="{{route('deliveryman_list')}}" class="btn btn-primary"><i class=" fas fa-arrow-left"></i></a><br>
                <form action="{{route('update_deal',$id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="hidden" value="{{$id}}" name="id">
                    <table class="table table-bordered">
                        <tr>

                            <td>
                            <label for="">Deal Title</label>
                                <input type="text" class="form-control"  value="{{$deliveryrequest->deals->title}}"  disabled>
                                <input type="hidden" class="form-control" id="name" name="deal_id" value="{{$deliveryrequest->deals->id}}"  >
                                @error('name')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                        
                        </tr>
                        <tr>
                            <td>
                               <label for="">Merchant Name</label> 
                            <input type="text" class="form-control"  value="{{$deliveryrequest->marchant->name}}" disabled>
                            <input type="hidden" class="form-control" id="name" name="merchant_id" value="{{$deliveryrequest->marchant->id}}" >
                                @error('phone')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="">Seller Name</label>
                            <input type="text" class="form-control" value="{{$deliveryrequest->seller->name}}" disabled>
                            <input type="hidden" class="form-control" id="received_by" name="seller_id" value="{{$deliveryrequest->seller->id}}" >
                                @error('photo')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><input type="hidden" name="merchant_approval" value="{{$deliveryrequest->merchant_approval}}"></td>
                            <td><input type="hidden" name="seller_approval" value="{{$deliveryrequest->seller_approval}}"></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Add Delivery Man</label>
                                <select name="deliveryman_id" id="" class="form-control">
                                    <option value="">Select Delivery Man</option>
                                    @if($delivery_man)
                                        @foreach($delivery_man as $delivery)
                                        <option value="{{$delivery->id}}">{{$delivery->name}}</option>
                                        @endforeach
                                    @endif
                                  <option value=""></option>
                                </select>
                             
                                @error('deliveryman_id')
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