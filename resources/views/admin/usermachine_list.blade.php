@extends('admin/layout')

@section('content')

<div class="row">
   <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">User Machine List</h3>
            </div>
            <div class="card-body">
            @if(Session::has('status'))
				<div class="alert alert-success" role="alert">
				  {{ Session::get('status')}}
				</div>
				@endif

                @if(Session::has('delete'))
				<div class="alert alert-danger" role="alert">
				  {{ Session::get('delete')}}
				</div>
				@endif
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th> Machine Name</th>
                                    <th>Purchase Date</th>
                                    <th>Brand</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($usermachine as $key => $machineData)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$machineData->title}}</td>
                                    <td>{{$machineData->machine->name}}</td>
                                    <td>{{$machineData->purchase_date}}</td>
                                    <td>{{$machineData->brand}}</td>
                                    <td>
                                        @if($machineData->approved=='no')
                                        <a href="{{route('approve_usermachine',$machineData->id)}}" class="btn btn-primary">Approved</a>
                                        @elseif($machineData->approved=='yes')
                                        <a href="{{route('disapprove_usermachine',$machineData->id)}}" class="btn btn-danger">Disapproved</a>
                                       
                                        @endif
                                    </td>
                                    <td >
                                        <a href="{{route('usermachine.edit',$machineData->id)}}" class="btn btn-primary btn-xs a" title="Edit"><i class="fas fa-edit"></i></a>
                                        <a href="{{route('usermachine.show',$machineData->id)}}" class="btn btn-info btn-xs a" title="View"><i class=" fas fa-eye"></i></a>
                                        <form action="{{route('usermachine.destroy',$machineData->id)}}" method="POST" style="display: inline-block;" >
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure???')" title="Edit"> <i class="fas fa-trash-alt"></i> </button>
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