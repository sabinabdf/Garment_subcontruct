@extends('front.layout')
@section('bennar')
<div class="page-title">
    <div class="container">
      <div class="page-caption">
        <h2>Profile Settings</h2>
        <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i> Work Order Post Details</p>
      </div>
    </div>
  </div>
    
@endsection
@section('content')
<section class="padd-top-80 padd-bot-80">
    <div class="container">
      <div class="row"> 
        

                                        



        <div class="col-xs-4 col-md-4">
          <?php $t='workOrder'; ?>
            <h1>{{$workOrderPostDetails->title}}</h1>
            <a href="{{route('proposalFrom',['id'=>$workOrderPostDetails->id,'name'=>$t])}}" class="btn btn-primary">Submit Proposal</a>
            
        </div>
        
        
      </div>
    </div>
</section>
    
@endsection