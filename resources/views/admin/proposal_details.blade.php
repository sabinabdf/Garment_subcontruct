@extends('admin/layout')

@section('content')
<br><br>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Proposal Details</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <!-- <a href="{{URL::previous()}}" ><i class="fas fa-arrow-alt-circle-left"></i></a> -->
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Merchanter Information</h2>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{asset('photos/company/'.$proposalDetails->workorder->Companies->logo)}}" alt="Company logo" style="width: 100%; border: 2px solid green; padding: 5px; border-radius: 10px;">
                                    </div>
                                    <div class="col-md-6">
                                        <p>Company Name : {{$proposalDetails->workorder->Companies->name}}</p>
                                        <p>Phone : {{$proposalDetails->workorder->Companies->phone}}</p>
                                        <p>E-mail : {{$proposalDetails->workorder->Companies->email}}</p>
                                        <p>Address : {{$proposalDetails->workorder->Companies->address}}</p>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- <div class="col-md-2"></div> -->
                            <div class="col-md-6">
                                <h2>Seller Information</h2>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{asset('photos/company/'.$proposalDetails->machinePost->usermachine->company->logo)}}" alt="Company logo" style="width: 100%; border: 2px solid green; padding: 5px; border-radius: 10px;">
                                    </div>
                                    <div class="col-md-6">
                                        <p>Company Name : {{$proposalDetails->machinePost->usermachine->company->name}}</p>
                                        <p>Phone : {{$proposalDetails->machinePost->usermachine->company->phone}}</p>
                                        <p>E-mail : {{$proposalDetails->machinePost->usermachine->company->email}}</p>
                                        <p>Address : {{$proposalDetails->machinePost->usermachine->company->address}}</p>
                                    </div>
                                 </div>
                            </div>
                        </div>
        

        <h3>Subject : <strong style="text-decoration: underline; color:green;">{{$proposalDetails->title}}</strong></h3>
        <table class="table table-bordered">
            <tr>
                <td><strong style="color:black;">Start Date</strong></td>
                <td>{{$proposalDetails->created_at->format('m/d/Y')}}</td>
                <td><strong style="color:black;">End Date</strong></td>
                <td>{{$proposalDetails->deadline}}</td>
            </tr>
        </table>
        <hr>
        <h4>Description</h4>
        <hr>
        <p>
            {{$proposalDetails->message}}
        </p>
        <hr>
        <h4>Quality</h4>
        <hr>
        <p>
            {{$proposalDetails->quality_related}}
        </p>
        <hr>
        <h4>Others Information</h4>
        <hr>
        <table class="table table-bordered">
            <tr>
                <td style="width: 25%; background: gray; color: #fff;">Budget</td>
                <td>{{$proposalDetails->budget}}</td>
            </tr>
            <tr>
                <td style="width: 25%; background: gray; color: #fff;">Quantity</td>
                <td>{{$proposalDetails->quantity}}</td>
            </tr>
            <tr>
                <td style="width: 25%; background: gray; color: #fff;">Status</td>
                <td><button class="btn btn-primary">{{$proposalDetails->status}}</button></td>
            </tr>
        </table>
        <div class="row">
            <div class="col-md-6">
                <h3>Machine Specifications</h3>
                <hr>
                <table class="table table-bordered">
                    <?php 
                     $spePostData = json_decode($proposalDetails->machinePost->usermachine->specifications);
                     foreach ($spePostData as $key => $value) {
                    ?>
                    <tr>
                        <td style="width: 50%; background: gray; color: #fff;">{{$key}}</td>
                        <td>{{$value}}</td>
                    </tr>
                <?php } ?>
                </table>
            </div>
            <div class="col-md-6">
                <h3>Order Specifications</h3>
                <hr>
                <table class="table table-bordered">
                    <?php 
                     $speOrderData = json_decode($proposalDetails->workorder->specifications);
                     foreach ($speOrderData as $key => $value) {
                    ?>
                    <tr>
                        <td style="width: 50%; background: gray; color: #fff;">{{$key}}</td>
                        <td>{{$value}}</td>
                    </tr>
                <?php } ?>
                </table>
            </div>
        </div>
            
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- End row -->

@endsection