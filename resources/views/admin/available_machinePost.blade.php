@extends('admin/layout')

@section('content')
<br><br>
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
                                    <th>Title</th>
                                    <th>Category Name</th>
                                    <th>Machine Name</th>
                                    <th>Photo</th>
                                    <th>Brand</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($users as $key => $machineData)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$machineData->title}}</td>
                                    <td>{{$machineData->category->name}}</td>
                                    <td>{{$machineData->name}}</td>
                                    <td><img src="{{asset('$machineData->photo')}}" style="width:80px"></td>
                                    <td>{{$machineData->brand}}</td>
                                    <td>{{$machineData->status}}</td>
                                    <td>


                                    </td>
                                    <td>
                                        <a href=""
                                            class="btn btn-primary btn-xs a"><i class="fas fa-edit"></i></a>
                                        <a href=""
                                            class="btn btn-info btn-xs a"><i class=" fas fa-eye"></i></a>
                                        <form action="{{route('delete_availableMachinePost',$machineData->id)}}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger a"
                                                onclick="return confirm('Are You Sure???')"> <i
                                                    class=" fas fa-cut "></i> </button>
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