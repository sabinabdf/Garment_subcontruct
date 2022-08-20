@extends('admin/layout')

@section('content')
<br><br>
<style>
    .d{
        display:inline-block;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Machine List</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Category Name</th>
                                    <th>Machine Name</th>
                                    <th>Photo</th>
                                    <th>Brand</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($machineList as $key => $machineData)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$machineData->category->name}}</td>
                                    <td>{{$machineData->name}}</td>
                                    <td><img src="{{asset($machineData->photo)}}" style="width:80px"></td>
                                    <td>{{$machineData->brand}}</td>
                                    <td>

                                        @if($machineData->status=='pending')
                                        <a href="{{route('approve_machines',$machineData->id)}}"
                                            class="btn btn-primary">Approved</a>
                                        @elseif($machineData->status=='active')
                                        <a href="{{route('disapprove_machines',$machineData->id)}}"
                                            class="btn btn-danger">Disapproved</a>
                                        @elseif($machineData->status=='inactive')
                                        <a href="{{route('approve_machines',$machineData->id)}}"
                                            class="btn btn-primary">Approved</a>
                                        @endif

                                    </td>
                                    <td>
                                        <div class="d">
                                                <a href="{{route('machine.edit',$machineData->id)}}"
                                                    class="btn btn-primary btn-xs a"><i class="fas fa-edit"></i></a>
                                                <a href="{{route('machine.show',$machineData)}}"
                                                    class="btn btn-info btn-xs a"><i class=" fas fa-eye"></i></a>
                                        </div>
                                        <div class="d">
                                            <form action="{{route('machine.destroy',$machineData)}}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-xs a"
                                                    onclick="return confirm('Are You Sure???')"> <i
                                                        class=" fas fa-trash-alt "></i> </button>
                                            </form>
                                        </div>
                                        <!-- <a href="" class="btn btn-danger btn-xs" ><i class=" fas fa-cut"></i></a> -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- End row -->

@endsection