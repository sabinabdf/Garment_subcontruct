@extends('admin/layout')

@section('content')
<br><br><br><br>
<div class="row">
  <div class="col-lg-12">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Delivery Requet List</h3>
              
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col-10">
                      <div class="table-responsive">
                          <table class="table mb-0">
                              <thead>
                                  <tr>
                                      <th>SL</th>
                                      <th> Deal Title</th>
                                      <th> Merchant Name</th>
                                      <th> Seller Name</th>
                                      <th> Merchant Approval</th>
                                      <th> Seller Approval</th>
                                      <th> Delivery Man</th>
                                      
                                      <th colspan="2" style="justify-content: center;">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    @if($deliveryrequest)
                                    @foreach ($deliveryrequest as $k=>$l)
                                    <tr>
                                        <td>{{++$k}}</td>

                                        <td>{{$l->deals->title}}</td>
                                        <td>{{$l->marchant->name}}</td>
                                        <td>{{$l->seller->name}}</td>
                                        <td>{{$l->merchant_approval}}</td>
                                        <td>{{$l->seller_approval}}</td>

                                        @if($l->deliveryman_id == NULL)
                                        <td ><span class="alert-danger">{{'Not Assigned'}} </span></td>
                                        @else
                                        <td ><span class="alert-success">{{$l->deliveryman->name}} </span></td>
                                        @endif
                                            

                                        <td>
                                        
                                        @if($l->deliveryman_id == NULL)
                                          <a href="{{route('add_deliveryman',$l->id)}}" class="btn btn-primary btn-sm">Add Delivery Man</a>
                                        @else
                                        <a href="" class="btn btn-success btn-sm">View Delivery Status</a>
                                        @endif
                                            
                                        </td>
                           
                                  </tr>
                                
                                  @endforeach
                                  @endif
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






