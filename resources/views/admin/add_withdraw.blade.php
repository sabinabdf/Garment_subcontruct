@extends('admin/layout')

@section('content')
<br><br><br><br>
<div class="row">
    <!-- Basic example -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Money Withdraw</h3></div>
            <div class="card-body">
                <form action="{{route('save_withdraw')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                    <label for="a">Company Name</label>
                    <select name="deal_id" class="form-control">
                        <option value=''>Select </option>
                       
                        @foreach($list as $l)

                        <option value="{{$l->id}}">{{$l->title}}</option>
                        @endforeach
                    </select>
                    @error('deal_id')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="a">Amount</label>
                        <input name="amount" type="text" class="form-control" id="a" placeholder="">
                        @error('amount')
                            <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="c">Payment Date</label>
                        <input name="payment_date" type="date" class="form-control" id="c" placeholder="">
                        @error('payment_date')
                            <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>
                    
                            
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                        <label for="d">Bank Name</label>
                        <input name="bank_name" type="text" class="form-control" id="d" placeholder="">
                        @error('bank_name')
                            <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>
                        <div class="form-group">
                        <label for="e">Account No</label>
                        <input name="account_no" type="text" class="form-control" id="e" placeholder="">
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


                        <!-- <input name="status" type="text" class="form-control" id="f" placeholder=""> -->
                        @error('status')
                           <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>
                        </div>
                        
                    </div>
                    
                    
                    
                    
    
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                </form>
            </div>
            <!-- card-body -->
        </div>
        <!-- card -->
    </div>
</div>


@endsection