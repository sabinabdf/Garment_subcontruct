@extends('admin/layout')

@section('content')
<br><br>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Order List</h3>
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
                                    <th>Budget</th>
                                    <th>Deadline</th>
                                    <th>Quantity</th>
                                    <th>Quality</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $k=>$order)
                                <tr>
                                    <td>{{++$k}}</td>
                                    <td>{{$order->title}}</td>
                                    <td>{{$order->budget}}</td>
                                    <td>{{$order->deadline}}</td>
                                    <td>{{$order->quantity}}</td>
                                    <td>{{$order->quality_related}}</td>
                                    <td>
                                        @if($order->status=='pending')
                                        <a href="{{route('approve_workorder_post',$order->id)}}"
                                            class="btn btn-primary">Approved</a>
                                        @elseif($order->status=='active')
                                        <a href="{{route('disapprove_workorder_post',$order->id)}}"
                                            class="btn btn-danger">Disapproved</a>
                                        @elseif($order->status=='inactive')
                                        <a href="{{route('approve_workorder_post',$order->id)}}"
                                            class="btn btn-primary">Approved</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin_edit_workorder',$order->id)}}" class="btn btn-primary btn-xs a"><i class="fas fa-edit"></i></a>
                                        
                                        <a href="{{route('admin_workorder_details',$order->id)}}" class="btn btn-info btn-xs a"><i class=" fas fa-eye"></i></a>
                                        <form action="{{route('del_order',$order->id)}}" method="post"
                                            style="display: inline-block">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-xs"
                                                onclick="return confirm('Are You Sure !!!')"> <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
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