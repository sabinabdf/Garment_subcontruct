@extends('admin/layout')

@section('content')
<br><br><br><br>
<div class="row">
    <!-- Basic example -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Category</h3></div>
            <div class="card-body">
              <form action="{{route('up_cat',$data->id)}}" method="post">
                    @csrf
                    @method('PUT')

                    
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder=" Enter the catergory name" value="{{$data->name}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Icon</label>
                        <input name="icon" type="text" class="form-control" id="exampleInputName1" placeholder=" Enter Icon class" value="{{$data->icon}}">
                    </div>
    
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                </form>
            </div>
            <!-- card-body -->
        </div>
        <!-- card -->
    </div>

       <!-- 2nd card start  -->
       <div class="col-lg-6">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Category List</h3>
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col-12">
                      <div class="table-responsive">
                          <table class="table mb-0 table-hover">
                              <thead>
                                  <tr>
                                      <th>SL</th>
                                      <th> Name</th>
                                      <th> Icon</th>
                                      <th  style="justify-content: center;">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    @foreach ($list as $k=>$l)
                                    <tr>
                                        <td>{{++$k}}</td>
                                  
                                        <td>{{$l->name}}</td>
                                        <td><i class="{{$l->icon}}" aria-hidden="true"></i></td>
                                        <td>

                                            <a href="{{route('edit_cat',$l->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                        </td>
                                        <td>
                                            <form action="{{route('delete_cat',$l->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger a" onclick="return confirm('Are You Sure???')"> <i class="fas fa-trash-alt"></i> </button>
                                                    <!-- <input type="submit" value="Delete" class="btn btn-sm btn-danger"> -->
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
</div>


@endsection