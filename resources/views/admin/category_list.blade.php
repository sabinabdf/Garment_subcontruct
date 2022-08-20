@extends('admin/layout')

@section('content')
<br><br><br><br>
<div class="row">
  <div class="col-lg-12">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Category List</h3>
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col-8">
                      <div class="table-responsive">
                          <table class="table mb-0">
                              <thead>
                                  <tr>
                                      <th>SL</th>
                                      <th> Name</th>
                                      <th colspan="2" style="justify-content: center;">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    @foreach ($list as $k=>$l)
                                    <tr>
                                        <td>{{++$k}}</td>
                                  
                                        <td>{{$l->name}}</td>
                                        <td>
                           
                                          <a href="{{route('edit_cat',$l->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                            <div>
                                                <form action="{{route('delete_cat',$l->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                                </form>
                                            </div>    
                                            
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






