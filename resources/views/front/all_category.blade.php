@extends('front.layout')
@section('content')

<!-- ======================= Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Browse by Categories</h2>
      <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i> Browse by Categories</p>
    </div>
  </div>
</div>
<!-- ======================= End Page Title ===================== --> 

<!-- ================= Category start ========================= -->
<section class="padd-top-80 padd-bot-60">
  <div class="container">
    <div class="row">
		<div class="col-md-12">
		@if($category)
		@foreach($category as $l)
		  <div class="col-md-3 col-sm-6">
			<a href="" title="">
				<div class="utf_category_box_area">
				  <div class="utf_category_desc">
					<div class="utf_category_icon"> <i class="{{$l->icon}}" aria-hidden="true"></i> </div>
					<div class="category-detail utf_category_desc_text"> 
						
					  <h4>{{$l->name}}</h4>
					  <p>122 Jobs</p>	
					</div>
				  </div>			
				</div>
			</a>
		  </div>
		  @endforeach
		  @endif
		
		  
	  </div>
    </div>
  </div>
</section>
@endsection
