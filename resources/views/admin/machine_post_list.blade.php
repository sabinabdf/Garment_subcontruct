@extends('admin/layout')

@section('content')

<div class="row">
   <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Machine Post List</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>User Machine</th>
                                    <th>Total Machine</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($machineposts as $key => $machineData)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$machineData->title}}</td>
                                    <td>{{$machineData->usermachine_id}}</td>
                                    <td>{{$machineData->number_of_machine}}</td>
                                    <td>
                                        @if($machineData->status=='pending')
                                        <a href="{{route('approve_post',$machineData->id)}}" class="btn btn-primary">Approved</a>
                                        @elseif($machineData->status=='active')
                                        <a href="{{route('disapprove_post',$machineData->id)}}" class="btn btn-danger">Disapproved</a>
                                        @elseif($machineData->status=='inactive')
                                        <a href="{{route('approve_post',$machineData->id)}}" class="btn btn-primary">Approved</a>
                                        @endif
                                    </td>
                                    <td >
                                        <a href="" class="btn btn-primary btn-xs a"><i class="fas fa-edit"></i></a>
                                        <a href="" class="btn btn-info btn-xs a"><i class=" fas fa-eye"></i></a>
                                        <form action="" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure???')"> <i class="fas fa-trash-alt"></i> </button>
                                        </form>
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