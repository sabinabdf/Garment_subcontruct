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
                 
                            <img src="{{url('uploads/'. $machinepost->photo)}}" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <h5>Machine Post Details</h5>
                            <table class="table">
                                <tr>
                                    <td>Title</td>
                                    <td>{{ $machinepost->title}}</td>
                                </tr>
                                <tr>
                                    <td>Machine Name</td>
                                    <td>{{ $machinepost->usermachines->machine->name}}</td>
                                </tr>
                                <tr>
                                    <td>Category Name</td>
                                    <td>{{ $machinepost->usermachines->category->name}}</td>
                                </tr>
                                <tr>
                                    <td>Company Name</td>
                                    <td>{{ $machinepost->usermachines->company->name}}</td>
                                </tr>
                                

                                <tr>
                                    <td>Brand</td>
                                    <td>{{ $machinepost->usermachines->brand}}</td>
                                </tr>
                                <tr>
                                    <td>Purchase Date</td>
                                    <td>{{ $machinepost->usermachines->purchase_date}}</td>
                                </tr>

                                <tr>
                                    <td>Status</td>
                                    @if($machinepost->usermachines->status == "available")
                                    <td><span class="alert alert-success">{{ $machinepost->usermachines->status}}</span></td>
                                    @endif

                                    @if($machinepost->usermachines->status == "busy")
                                    <td><span class="alert alert-warning">{{ $machinepost->usermachines->status}}</span></td>
                                    @endif
                                </tr>
                            </table>
        
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-12">
                    <h4>Specifications</h4><hr>
                    <table class="table table-hover">
                        @php
                        $data = json_decode($machinepost->usermachines->specifications);
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
                    <table class="table table-hover">
                        <tr>
                            <td>User Machine Title</td>
                            <td>{{ $machinepost->usermachines->title}}</td>
                        </tr>
                        <tr>
                            <td>Number Of Machine </td>
                            <td>{{ $machinepost->usermachines->number_of_machine}}</td>
                        </tr>
                        <tr>
                            <td>Number Of Machine Available</td>
                            <td>{{ $machinepost->usermachines->number_of_available}}</td>
                        </tr>
                       
        
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>
</div>

@endsection

