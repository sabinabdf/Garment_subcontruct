@extends('admin/layout')

@section('content')
<br><br><br>
<h2>Completed Deal List</h2>
<table class="table table-hover">
    <tr>
        <th>Merchant Company Name</th>
        <th>Seller Company Name</th>
        <th>Machine name</th>
        <th>Title</th>
        <th>Deadline</th>
        <th>Action</th>
    </tr>
@foreach($data as $d)
    <tr>
        <td>{{$d->marchant->name}}</td>
        <td>{{$d->seller->name}}</td>
        <td>{{$d->machineID->name}}</td>
        <td>{{$d->title}}</td>
        <td>{{$d->deadline}}</td>
        <td>
                                    
             <a href="{{route('dealsDetails',$d->id)}}"
             class="btn btn-primary btn-xs"><i class=" fas fa-list"></i></a>
             <!-- <a href="" class="btn btn-danger btn-xs" ><i class=" fas fa-cut"></i></a> -->
        </td>
    </tr>
    @endforeach
</table>
@endsection
