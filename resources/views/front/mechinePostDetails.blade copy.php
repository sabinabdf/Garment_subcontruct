@extends('front.layout')
@section('bennar')
<div class="page-title">
    <div class="container">
      <div class="page-caption">
        <h2>Profile Settings</h2>
        <p><a href="#" title="Home">Dashboard</a> <i class="ti-angle-double-right"></i> Mechine Post Details</p>
      </div>
    </div>
  </div>
    
@endsection
@section('content')
<section class="padd-top-80 padd-bot-80">
    <div class="container">
      <div class="row"> 
        
        <div class="col-xs-4 col-md-4">
            <h1>{{$machinePostDetails->title}}</h1>
            <?php $t = 'machine'; ?>
            <a href="{{route('proposalFrom',['id'=>$machinePostDetails->id,'name'=>$t])}}" class="btn btn-primary">Submit Proposal</a>
            
        </div>
        
        
      </div>
    </div>
</section>
    
@endsection