@extends('admin/layout')

@section('content')
<br><br><br><br>
<div class="row">
  <div class="col-lg-12">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Machine List</h3>
          </div>
          <div class="card-body">
              <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Photo</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($data as $key=>$d)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$d->title}}</td>
                                <td>{{$d->category->name}}</td>
                                <td>
                                    <img src="{{url('uploads/'.$d->photo)}}" alt="" style="width: 100px">
                                    
                                </td>
                                <td>
                                    <a href="{{route('machineDetailsInt',$d->id)}}" class="btn btn-info">View</a>
                                    
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

@endsection
