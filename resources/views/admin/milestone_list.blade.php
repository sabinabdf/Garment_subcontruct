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
                    <table class="table table-bordered">
                    <tr>
                        <th>Sl</th>
                        <th>Title</th>

                        <th>Feedback</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                        <th>Action</th>

                        
                    </tr>
                 
                    @foreach ($job as $k=>$list)
                        @if($list->deal_id == $id)
                    <tr>

                       
                        <td>{{++$k}}</td>
                        <td>{{$list->title}}</td>
                        <td>{{$list->feedback}}</td>
                        <td>{{$list->start_date}}</td>
                        <td>{{$list->end_date}}</td>
                        <td>
                          @if($list->status == 'active')
                          <span class="alert alert-success" role="alert" style="color:black"> {{$list->status}} </span>
                          
                           @elseif($list->status == 'inactive')
                           <span  class="alert alert-danger" role="alert" style="color:black"> {{$list->status}} </span>
                           @elseif($list->status == 'pending')
                           <span  class="alert alert-warning" role="alert" style="color:black"> {{$list->status}} </span>
                           @elseif($list->status == 'completed')

                           <span class="alert alert-info" role="alert" style="color:black"> {{$list->status}} </span>
                               
                           @endif
                        </td>

                        


                       
 
  </div>
</div>                                      
                        <td>
                        
                        <a href="{{route('edit_milestone',$list->id)}}" class="btn btn-xs btn-success"><i class="fas fa-edit"></i></a>
                            <a href="{{route('milestone_view',$list->id)}}" class="btn btn-xs btn-info"><i class="fas fa-eye"></i></a>
                            <!-- <a href="{{route('edit_deals',$list->id)}}" class="btn btn-xs btn-primary">Ad</a> -->
                            
                            <form action="{{route('delete_milestone',$list->id)}}" method="post">
                              
                                @csrf
                                @method('delete')
                                <a href="" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></a>


                            </form>


                           
                        </td>

                    </tr>
                        @endif
                    @endforeach
                    
                </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- End row -->

@endsection