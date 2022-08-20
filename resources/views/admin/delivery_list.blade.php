@extends('admin/layout')

@section('content')
<br><br>
        @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @if (session('info'))
                    <div class="alert alert-danger">
                        {{ session('info') }}
                    </div>
                @endif

                @if (session('update'))
                    <div class="alert alert-success">
                        {{ session('update') }}
                    </div>
                @endif
<div class="row">
    <div class="col-lg-12">
        <div class="card">            

            <div class="card-header">
                <h2 class="card-title">Delivaery Man Details</h2>
            </div>
            <div class="card-body">
            <a href="{{route('delivery')}}" class="btn btn-primary"><i class=" fas fa-arrow-left"></i></a><br>
                <div class="row">


                    <div class="col-md-12 col-sm-12 col-12">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Photo</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($delivery as $key => $m)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$m->name}}</td>
                                    <td>{{$m->phone}}</td>
                                    <td><img src="{{asset('photos/delivery/'.$m->photo)}}" alt="" style="height:70px;width:70px"></td>

                                    @if($m->status == 'active')
                                        <td ><span class="alert-success">{{$m->status}} </span></td>
                                    @elseif($m->status == 'inactive')
                                        <td ><span class="alert-danger">{{$m->status}} </span></td>
                                    @else
                                        <td ><span class="alert-primary">{{$m->status}} </span></td>
                                    @endif

                                    <td>

                                        <!-- @if($m->status=='pending')
                                        <a href="{{route('approve_machines',$m->id)}}"
                                            class="btn btn-primary">Approved</a>
                                        @elseif($m->status=='active')
                                        <a href="{{route('disapprove_machines',$m->id)}}"
                                            class="btn btn-danger">Disapproved</a>
                                        @elseif($m->status=='inactive')
                                        <a href="{{route('approve_machines',$m->id)}}"
                                            class="btn btn-primary">Approved</a>
                                        @endif -->

                                   
                                        <a href="{{route('edit_delivery',$m->id)}}"
                                            class="btn btn-primary btn-xs a"><i class="fas fa-edit"></i></a>
                                        <a href="{{route('machine.show',$m)}}"
                                            class="btn btn-info btn-xs a"><i class=" fas fa-eye"></i></a>
                                        <form action="{{route('delete_delivery',$m)}}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-xs btn-danger a"
                                                onclick="return confirm('Are You Sure???')"> <i
                                                    class="  fas fa-trash-alt "></i> </button>
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