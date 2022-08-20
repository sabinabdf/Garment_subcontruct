@extends('front.layout')
@section('content')
<!-- ================ Profile Settings ======================= -->
<section class="padd-top-80 padd-bot-80">
  <div class="container">
    <div class="row"> 
      <div class="col-md-3">
		<div id="leftcol_item">
		  <div class="user_dashboard_pic"> <img alt="user photo" src="{{asset('photos/profile/'.$data->photo)}}"> <span class="user-photo-action">{{ Auth::user()->name }}</span> </div>
		</div>
		@include('front.dashSidebar')
	  </div>
	  <div class="col-md-9">
		
		<a href="{{route('proposalList')}}" ><i class="fa-solid fa-arrow-left"></i></a>
	  	<h1 class="btn btn-info btn-block">Proposal Information</h1>
	  	<strong>Company Logo</strong> <br>
	  	<img src="{{asset('photos/company/'.$proposalDetails->user->company->logo)}}" alt="Company logo" style="width: 150px; border: 2px solid green; padding: 5px; border-radius: 10px;">
	  	<h5>Date : {{$proposalDetails->created_at}}</h5>
	  	<p>Subject : <strong style="text-decoration: underline;">{{$proposalDetails->title}}</strong></p>
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
	  			<td style="width: 25%;">Budget</td>
	  			<td>{{$proposalDetails->budget}}</td>
	  		</tr>
	  		<tr>
	  			<td style="width: 25%;">Deadline</td>
	  			<td>{{$proposalDetails->deadline}}</td>
	  		</tr>
	  		<tr>
	  			<td style="width: 25%;">Quantity</td>
	  			<td>{{$proposalDetails->quantity}}</td>
	  		</tr>
	  		<tr>
	  			<td style="width: 25%;">Status</td>
	  			<td>{{$proposalDetails->status}}</td>
	  		</tr>
	  	</table>
	  	
			<p>Company Name : {{$proposalDetails->user->company->name}}</p>
	  	<p>Phone : {{$proposalDetails->user->company->phone}}</p>
	  	<p>E-mail : {{$proposalDetails->user->company->email}}</p>
	  	<p>Address : {{$proposalDetails->user->company->address}}</p>

	  	
    </div>	 
    </div>
  </div>
</section>
<!-- ================ End Profile Settings ======================= --> 
@endsection