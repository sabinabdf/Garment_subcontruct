@extends('admin.layout')
@section('content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  



      <div class="col-md-9 col-xl-6" style="margin-top: 15px;margin-bottom: 50px">
            
        <div class="row">
        <a href="{{route('dashboard')}}" class="btn btn-md " style="width:10%;background:#548CA8;color:white"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Back</a>      
            <div class="col-md-12">
                <h3>Milestone List</h3>
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

                    <tr>
                       @if($list->Deals->marchant->id == Auth::user()->company_id)
                       
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
                       @endif
                    </tr>
                    @endforeach
                    
                </table>

            </div>
          
        </div>

    </div>

		</div>
	
      </div>	  
	

</section>
<!-- ================ End Profile Settings ======================= --> 
@endsection







  