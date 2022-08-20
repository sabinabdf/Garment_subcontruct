@extends('admin/layout')

@section('content')
<br><br><br><br>
<div class="row">
    <!-- Basic example -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> Machine Post</h3></div>
            <div class="card-body">

               
                <table class="table table-hover">
            <tr>
                <th>SL</th>
                <th>Title</th>
                <th>Number of machine</th>
                <th>Usermachine Name</th>
                <th>Status</th>
                
                <th>Action</th>
            </tr>
            
            @foreach ($machinepost as $sl => $m)
                <tr>
                    <td>{{++$sl}}</td>
                   
                    <td>{{$m->title}}</td>
                    <td>{{$m->number_of_machine}}</td>
                    <td>{{$m->usermachine->machine->name}}</td>
                    <td>
                        @if($m->status == 'active')
                            
                                <span class="alert alert-success" role="alert">
                                  {{$m->status}}
                                </span> 
                            
                        @endif

                        @if($m->status == 'inactive')
                            
                                <span class="alert alert-danger" role="alert">
                                  {{$m->status}}
                                </span> 
                            
                        @endif

                        @if($m->status == 'pending')
                            
                                <span class="alert alert-warning" role="alert">
                                  {{$m->status}}
                                </span> 
                            
                        @endif
                    </td>
                    
                    <td>
                        <a href="{{route('machine_post_edit',$m->id)}}" class="btn btn-success btn-xs" title="Edit" ><i class="fas fa-edit"></i></a>
                        <a href="{{route('machine_post_view',$m->id)}}" class="btn btn-primary btn-xs" title="View" ><i class=" fas fa-eye"></i></a>
                        <form action="{{route('delete',$m->id)}}" method="post" >
                        @method('delete')
                        @csrf
                             <button    title="Delete" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure ?')"><i class="fas fa-trash-alt"></i></button>
                        </form>

                    </td>
                </tr>
            @endforeach 
        </table>
                
            </div>
            <!-- card-body -->
        </div>
        <!-- card -->
    </div>
</div>


@endsection