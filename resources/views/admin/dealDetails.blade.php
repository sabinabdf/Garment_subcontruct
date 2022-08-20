@extends('admin/layout')

@section('content')
<br><br>
<div>

    <a href="{{route('milestone_list',$deals->id)}}" class="btn btn-success"> Milestone Details</a>
    <a href="{{route('collection',$deals->id)}}" class="btn btn-success">Add Cash Collection</a>
    <a href="{{route('add_withdraw',$deals->id)}}" class="btn btn-success">Add Cash Withdraw</a>
    <a href="{{route('cash_ledger',$deals->id)}}" class="btn btn-success">Payment Report</a>
    <!-- <a href="" class="btn btn-success"> Add Inun</a> -->
</div>
<br><br>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Deal Details</h3>
            </div>
            <div class="card-body">
                <a href="{{route('dealList')}}" class="btn btn-primary"><i class=" fas fa-arrow-left"></i></a>
                <div class="row">



                    <div class="col-md-4 col-xs-4">
                        <h3>Machant</h3>
                        <strong> Company Name : {{$deals->marchant->name}}</strong><br>
                        <strong> Email : {{$deals->marchant->email}}</strong><br>
                        <strong> Address : {{$deals->marchant->address}}</strong><br>

                    </div>
                    <div class="col-md-2 col-xl-2">
                        <img src="{{url('admin_assets/images/deal.jpg')}}" alt="" class="img-responsive"
                            style="width: 80%">
                    </div>
                    <div class="col-md-4 col-xl-4">
                        <h3>Seller</h3>
                        <strong> Company Name : {{$deals->seller->name}}</strong><br>
                        <strong> Email : {{$deals->seller->email}}</strong><br>
                        <strong> Address : {{$deals->seller->address}}</strong><br>
                        
                    </div>

                    <div class="col-md-2 col-xl-2">

                    </div>
                    <div class="col-md-8 col-xl-8 col-offset-4" style="text-align: center">
                        <h3 style="text-align: left">Details</h3><hr>
                        <table class="table">
                            <tr>
                                <td>Deal Name</td>
                                <td>{{$deals->title}}</td>

                            </tr>
                            <tr>
                                <td>Budget</td>
                                <td>{{$deals->budget}}/= TK</td>
                            </tr>
                            <tr>
                                <td>Advance Paid</td>
                                <td>{{$deals->advance_amount}}/= TK</td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td>{{$deals->quantity}}</td>
                            </tr>
                            <tr>
                                <td>Quaality Related Message</td>
                                <td>{{$deals->quality_related}}</td>
                            </tr>
                            <tr>
                                <td>Dead Line</td>
                                <td>{{$deals->deadline}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-2 col-xl-2">

                    </div>

                    <div class="col-md-8 col-xl-8 col-offset-4" style="text-align: center">
                        <h3 style="text-align: left">Machine Details</h3>
                        <p style="text-align: left"><strong >Machine Name: {{$deals->machine->name}}</strong></p>
                        <table class="table">
                            @php
                            $data = json_decode($deals->specifications);
                            @endphp
                            @foreach ( $data as $key=>$value)
                            <tr>
                                <td>{{$key}}</td>
                                <td>{{$value}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>

@endsection