@extends('admin/layout')

@section('content')
<br><br><br><br>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12 col-xl-12">
                    <div class="row">
                        <div class="col-md-4">
                 
                            <img src="{{url('uploads/'.$userMachine->photo)}}" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <h5>Details</h5>
                            <table class="table">
                                <tr>
                                    <td>Name</td>
                                    <td>{{$userMachine->title}}</td>
                                </tr>
                                <tr>
                                    <td>Category</td>
                                    <td>{{$userMachine->category->name}}</td>
                                </tr>
                                <tr>
                                    <td>Machine</td>
                                    <td>{{$userMachine->machine->name}}</td>
                                </tr>
                                <tr>
                                    <td>Total Machine</td>
                                    <td>{{$userMachine->number_of_machine}}</td>
                                </tr>
                                <tr>
                                    <td>Total Available</td>
                                    <td>{{$userMachine->number_of_available}}</td>
                                </tr>
                            </table>
        
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-12">
                    <h4>Spacifications</h4><hr>
                    <table class="table">
                        @php
                        $data = json_decode($userMachine->specifications);
                        @endphp
                        @foreach ( $data as $key=>$value)
                        <tr>
                            <td>{{$key}}</td>
                            <td>{{$value}}</td>
                        </tr>
                        @endforeach
                    </table>
        
                </div>
                <div class="col-md-12 col-xl-12">
                    <h4>More Details</h4><hr>
                    <table class="table">
                        <tr>
                            <td>Brand</td>
                            <td>{{$userMachine->brand}}</td>
                        </tr>
                        <tr>
                            <td>Purchase Date</td>
                            <td>{{$userMachine->purchase_date}}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>{{$userMachine->status}}</td>
                        </tr>
        
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>
</div>

@endsection

