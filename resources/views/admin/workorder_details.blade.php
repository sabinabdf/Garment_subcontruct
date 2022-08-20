@extends('admin/layout')

@section('content')

<div class="row">
   <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Workorder Details</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">

                        <div class="col-md-8 col-xl-6" style="margin-top: 40px;margin-bottom: 50px">
            
                            <div class="row">
                               
                    
                                <div class="col-md-4">
                                 
                                    <img src="" alt="" class="img-responsive">
                                    {{-- {{url('uploads/'.$userMachine->photo)}} --}}
                                </div>
                                <div class="col-md-8">
                                    <h5>Workorder Details</h5>
                                    <table class="table">
                                        <tr>
                                            <td>Company Name</td>
                                            <td>  {{$w_details->Companies->name}}</td>
                                          
                                        </tr>
                                        <tr>
                                            <td>Category Name</td>
                                            <td>{{$w_details->Categories->name}}</td>
                                           
                                        </tr>
                                        <tr>
                                            <td>Machine name</td>
                                            <td>{{$w_details->Machines->name}}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Title</td>
                                            <td>{{$w_details->title}}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Budget</td>
                                            <td>{{$w_details->budget}}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Quantity</td>
                                            <td>{{$w_details->quantity}}</td>
                                           
                                        </tr>
                                        <tr>
                                            <td>Deadline</td>
                                            <td>{{$w_details->deadline}}</td>
                                           
                                        </tr>
                                    </table>
                    
                                </div>
                              
                            </div>
                    
                        </div>
                    
                         
                         <section class="padd-bot-80">
                        <div class="container" style="margin-top:50px">
                            
                            <div class="col-md-8">
                                <h4>Spacifications</h4><hr>
                                <table class="table">
                                    @php
                                     $data = json_decode($w_details->specifications);
                                    @endphp
                                    @foreach ( $data as $key=>$value)
                                    <tr>
                                        <td>Specification Title</td>
                                        <td>Specification Value</td>
                                    </tr>
                                    <tr>
                                        <td>{{$key}}</td>
                                        <td>{{$value}}</td>                                       
                                    </tr>
                                    @endforeach
                                </table>
                    
                            </div>
                            <div class="col-md-8">
                                <h4>More Details</h4><hr>
                                <table class="table">
                                    <tr>
                                        <td>Quality</td>
                                        <td>{{$w_details->quality_related}}</td>
                                        
                                        
                                    </tr>
                                    <tr>
                                        <td>Created Date</td>
                                        <td>{{$w_details->created_at}}</td>
                                    
                                       
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>{{$w_details->status}}</td>
                                        
                                       
                                    </tr>
                    
                                </table>
                            </div>
                    
                        </div>
                    </section>

                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- End row -->

@endsection