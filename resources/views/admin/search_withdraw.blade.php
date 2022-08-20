@extends('admin/layout')

@section('content')
<br><br><br><br>
<div class="row">
  <div class="col-lg-12">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Withdraw List</h3>
          </div>
          <table class="table table-bordered">
            <tr>
               <form action="{{route('withdraw_search')}}" method="POST">
                @csrf
               <td>Start Date</td>
                <td><input type="date" name="start_date" class="form-control"></td>
                <td>End Date</td>
                <td><input type="date" name="end_date" class="form-control"></td>
                <td><input class="btn btn-primary" type="submit" value="Search"></td>
               </form>
            </tr>
          </table>
          <div class="card-body">
              <div class="row">
                  <div class="col-12">
                      <div class="table-responsive">
                        
                          <table class="table mb-0">
                              <thead>
                                  <tr>
                                      <th>SL</th>
                                      <th> Deal List</th>
                                      <th> Amount</th>
                                      <th> Posted List</th>
                                      <th> Status</th>
                                      <th> Payment Date</th>
                                      <th> Bank Name</th>
                                      <th> Account No</th>
                                      <th> Status</th>
                                      <th colspan="2" style="justify-content: center;">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                  @php 
                                    $totalAmount = 0;
                                    @endphp
                                    @foreach ($searchResult as $k=>$l)
                                    @php $totalAmount = $totalAmount + $l->amount @endphp

                                    <tr>
                                        <td>{{++$k}}</td>
                                        <td>{{$l->Deals->title}}</td>
                                        <td>{{$l->amount}}</td>
                                        <td>{{$l->posted_by}}</td>
                                        <td>{{$l->status}}</td>
                                        <td>{{$l->payment_date}}</td>
                                        <td>{{$l->bank_name}}</td>
                                        <td>{{$l->account_no}}</td>
                                        <td>{{$l->status}}</td>
                                        <td>
                           
                                          <a href="{{route('withdraw_edit',$l->id)}}" class="btn btn-primary btn-sm">Update</a>
                                            <div>
                                                <form action="{{route('withdraw_delete',$l->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                                </form>
                                            </div>    
                                            
                                        </td>
                           
                                  </tr>
                                
                                  @endforeach
                                  <tr>
                                    <td colspan="2" align="right">Total Amount</td>
                                    <td align="right">{{$totalAmount}}</td>
                                  </tr>
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