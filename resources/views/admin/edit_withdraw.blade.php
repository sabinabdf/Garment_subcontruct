@extends('admin/layout')

@section('content')
<br><br><br><br>
<div class="row">
    <!-- Basic example -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Withdrawals</h3></div>
            <div class="card-body">
            <form action="{{route('withdraw_update',$list->id)}}" method="post">
            @csrf
            @method('PUT')
                    <div class="form-group">
                    <select name="deal_id" class="form-control">
                        <option value="{{$list->Deals->id}}">{{$list->Deals->title}}</option>
                    </select>
                    @error('deal_id')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="a">Amount</label>
                        <input name="amount" type="text" value="{{$list->amount}}" class="form-control" id="a">
                        @error('amount')
                            <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="b">Posted By</label>
                        <input name="posted_by" type="text" value="{{$list->posted_by}}" class="form-control" id="b">
                        @error('posted_by')
                            <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="c">Payment Date</label>
                        <input name="payment_date" type="date" value="{{$list->payment_date}}" class="form-control" id="c">
                        @error('payment_date')
                            <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="d">Bank Name</label>
                        <input name="bank_name" type="text" value="{{$list->bank_name}}" class="form-control" id="d">
                        @error('bank_name')
                            <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="e">Account No</label>
                        <input name="account_no" type="text" value="{{$list->account_no}}" class="form-control" id="e">
                        @error('account_no')
                           <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="f">Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                            <option value="pending" selected>Pending</option>
                        </select>
                        
                        
                        <!-- <input name="status" type="text" value="{{$list->status}}" class="form-control" id="f"> -->
                        @error('status')
                           <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>
    
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                </form>
            </div>
            <!-- card-body -->
        </div>
        <!-- card -->
    </div>
</div>


@endsection
