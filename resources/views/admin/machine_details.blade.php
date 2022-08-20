@extends('admin/layout')

@section('content')

<div class="row">
   <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Machine Details</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <tr>
                                <td style="width:15%">Machine Image</td>
                                <td><img src="{{asset($machine->photo)}}" style="width:100px"></td>
                            </tr>
                            <tr>
                                <td style="width:15%">Machine Name</td>
                                <td>{{$machine->name}}</td>
                            </tr>
                            <tr>
                                <td style="width:15%">Machine Name</td>
                                <td>{{$machine->category->name}}</td>
                            </tr>
                            <tr>
                                <td style="width:15%">Brand Name</td>
                                <td>{{$machine->brand}}</td>
                            </tr>
                            @php
                            $specifications= json_decode($machine->specifications,true);
                            foreach($specifications as $key=>$data){
                            @endphp
                            <tr>
                                <td style="width:15%">{{$key}}</td>
                                <td>{{$data}}</td>
                            </tr>
                            @php
                                }
                            @endphp
                            <tr>
                                <td><a href="{{route('machine.index')}}" class="btn btn-primary btn-block">Back</a></td>
                                <td></td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- End row -->

@endsection