@extends('admin.layout')
@section('content')

<!-- ================ Profile Settings ======================= -->


<div class="card">
      <div class="col-md-12 col-xl-6" style="margin-top: 100px;margin-bottom: 50px">

        <div class="row">
       
            <div class="col-md-12">
                <h1 style="text-align: center;">Expired Deadline</h1>
                <table class="table table-bordered">
                    <tr>
                    <th>Sl</th>
                   <th>Merchant Company</th>
                   <th>Seller Company</th>
                   <th>Machine Name</th>
                   <th>Title</th>
                   <th>Budget</th>
                   <th>Advance Amount</th>
                   <th>Quantity</th>
                   <th>Deadline</th>
                       

                        
                    </tr>
                    @foreach($deal as $k=>$d) 
                    <tr>
                       
                        <td>{{++$k}}</td>
                        <td>{{$d->marchant->name}}</td>
                        <td>{{$d->seller->name}}</td>
                        <td>{{$d->machineID->name}}</td>
                        <td>{{$d->title}}</td>
                        <td>{{$d->budget}}</td>
                        <td>{{$d->advance_amount}}</td>
                        <td>{{$d->quantity}}</td>
                        <td><strong  class="btn" style="background:red" >{{$d->deadline}}</strong></td>
                     
                       
                    </tr>
                    @endforeach
                    
                </table>

            </div>
           
           
        
           
                  </div>
          
        </div>
   

        </div>


     



<!-- ================ End Profile Settings ======================= --> 
@endsection