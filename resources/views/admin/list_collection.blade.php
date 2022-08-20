@extends('admin/layout')

@section('content')
<br><br>
<div class="row">
    <div class="col-lg-12">
        <div class="card">            

            <div class="card-header">
                <h2 class="card-title">Collection Details</h2>
            </div>
            <div class="card-body">
            <a href="{{route('dealList')}}" class="btn btn-primary"><i class=" fas fa-arrow-left"></i></a><br>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Amount</th>
                                    <th>Collection Date</th>
                                    <th>Recieved By</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($collect as $key => $m)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$m->amount}}</td>
                                    <td>{{$m->collection_date}}</td>
                                    <td>{{$m->received_by}}</td>
                                    <td>{{$m->status}}</td>
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

                                   
                                        <a href="{{route('machine.edit',$m->id)}}"
                                            class="btn btn-primary btn-xs a"><i class="fas fa-edit"></i></a>
                                        <a href="{{route('machine.show',$m)}}"
                                            class="btn btn-info btn-xs a"><i class=" fas fa-eye"></i></a>
                                        <form action="{{route('machine.destroy',$m)}}" method="POST"
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