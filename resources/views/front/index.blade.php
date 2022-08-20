@extends('front.layout')
{{-- bennnar section --}}
@section('bennar')
<div class="utf_main_banner_area" style="background-image:url({{url('Front_Assets/img/slider_bg.jpg')}});" data-overlay="8">
    <div class="container">
      <div class="col-md-8 col-sm-10">
        <div class="caption cl-white home_two_slid">
          <h2>There are More Then <span class="theme-cl">50,000</span> Open Works.</h2>
          <p>Trending Jobs Keywords: <span class="trending_key"><a href="#">Work Orders</a></span> <span class="trending_key"><a href="#">Machine</a></span> <span class="trending_key"><a href="#">Cutter Machine</a></span> <span class="trending_key"><a href="#">Fabric</a></span></p>
        </div>
        {{-- <form>
          <fieldset class="utf_home_form_one">
            <div class="col-md-4 col-sm-4 padd-0">
              <input type="text" class="form-control br-1" placeholder="Search Keywords..." />
            </div>
            <div class="col-md-3 col-sm-3 padd-0">
              <select class="wide form-control br-1">
                <option data-display="Location">All Country</option>
                <option value="1">Afghanistan</option>
                <option value="2">Albania</option>
                <option value="3">Algeria</option>
                <option value="4">Brazil</option>
                <option value="5">Burundi</option>
                <option value="6">Bulgaria</option>
                <option value="7">Germany</option>
                <option value="8">Grenada</option>
                <option value="9">Guatemala</option>
                <option value="10" disabled>Iceland</option>
              </select>
            </div>
            <div class="col-md-3 col-sm-3 padd-0">
              <select class="wide form-control">
                <option data-display="Category">Show All</option>
                <option value="1">Software Developer</option>
                <option value="2">Java Developer</option>
                <option value="3">Software Engineer</option>
                <option value="4">Web Developer</option>
                <option value="5">PHP Developer</option>
                <option value="6">Python Developer</option>
                <option value="7">Front end Developer</option>
                <option value="8">Associate Developer</option>
                <option value="9">Back end Developer</option>
                <option value="10">XML Developer</option>
                <option value="11">.NET Developer</option>              
                <option value="12" disabled>Marketting Developer</option>
              </select>
            </div>
            <div class="col-md-2 col-sm-2 padd-0 m-clear">
              <button type="submit" class="btn theme-btn cl-white seub-btn">Search</button>
            </div>
          </fieldset>
        </form> --}}
  <a class="btn theme-btn btn-m" href="{{route('timeline')}}">Find For You</a>
      </div>
    </div>
  </div>
    
@endsection
{{-- content starts --}}
@section('content')

<section class="padd-top-80 padd-bot-80">
    <div class="container"> 
      <!-- <ul class="nav nav-tabs nav-advance theme-bg" role="tablist">
        <li class="nav-item active"> <a class="nav-link" data-toggle="tab" href="#recent" role="tab"> Latest Jobs</a> </li>
        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#" role="tab"> Recent Jobs</a> </li>
      </ul> -->

      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h2>Work Order</h2>  
            <p>Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>	
          </div>
        </div>
      </div>
      <div class="tab-content"> 
        <div class="tab-pane fade in show active" id="recent" role="tabpanel">
          <div class="row"> 
            <!-- Single Job -->
            @if($work_order)
            @foreach($work_order as $lo => $co)
            @if($lo<8)
            <div class="col-md-3 col-sm-6">
              <div class="utf_grid_job_widget_area"> <span class="job-type full-type">Full Time</span>
                <div class="utf_job_like">
                  <label class="toggler toggler-danger">
                    <input type="checkbox" >
                    <i class="fa fa-heart"></i> 
                  </label>
                </div>
                <div class="u-content">
                  <div class="avatar box-80"> <a href="{{route('show_company_profile_login',$co->Companies->id)}}"> <img class="img-responsive" src="{{asset('photos/company/'.$co->Companies->photo)}}" alt=""> </a> </div>
                  <h5><a href="employer-detail.html">{{$co->title}}</a></h5>
                  <p class="text-muted" style="max-height:20px; overflow: hidden;">Company : {{$co->Companies->name}}</p>
                  <p class="text-muted" style="max-height:20px; overflow: hidden;">Category : {{$co->Machine->name}}</p>
                  <p class="text-muted" style="max-height:20px; overflow: hidden;">Machine : {{$co->Category->name}}</p>
                </div>
                <div class="utf_apply_job_btn_item"> <a href="{{route('show_company_profile_login',$co->Companies->id)}}" class="btn job-browse-btn btn-radius br-light">Visit Company</a> </div>
              </div>
            </div>
            @endif
            @endforeach
            @endif
            
            
          </div>
        </div>
      </div>
      <div class="col-md-12 mrg-top-20 text-center">
        <a href="{{route('timeline')}}" class="btn theme-btn btn-m">Go to Timeline</a>
      </div>
    </div>
  </section>

<!-- machine post start  -->
<section class="padd-top-80 padd-bot-80">
    <div class="container"> 
      <!-- <ul class="nav nav-tabs nav-advance theme-bg" role="tablist">
        <li class="nav-item active"> <a class="nav-link" data-toggle="tab" href="#recent" role="tab"> Latest Jobs</a> </li>
        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#" role="tab"> Recent Jobs</a> </li>
      </ul> -->

      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h2>Machine Post</h2>  
            <p>Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>	
          </div>
        </div>
      </div>
      <div class="tab-content"> 
        <div class="tab-pane fade in show active" id="recent" role="tabpanel">
          <div class="row"> 
            <!-- Single Job -->
            @if($machine_order)
            @foreach($machine_order as $lo => $co)
            @if($lo<8)
            <div class="col-md-3 col-sm-6">
              <div class="utf_grid_job_widget_area"> <span class="job-type full-type">Full Time</span>
                <div class="utf_job_like">
                  <label class="toggler toggler-danger">
                    <input type="checkbox" >
                    <i class="fa fa-heart"></i> 
                  </label>
                </div>
                <div class="u-content">
                  <div class="avatar box-80"> <a href="{{route('show_company_profile_login',$co->usermachine->company->id)}}"> <img class="img-responsive" src="{{asset('photos/company/'.$co->usermachine->company->photo)}}" alt=""> </a> </div>
                  <h5><a href="employer-detail.html">{{$co->title}}</a></h5>
                  <p class="text-muted" style="max-height:20px; overflow: hidden;">{{$co->usermachine->company->address}}</p>
                </div>
                <div class="utf_apply_job_btn_item"> <a href="{{route('show_company_profile_login',$co->usermachine->company->id)}}" class="btn job-browse-btn btn-radius br-light">Visit Company</a> </div>
              </div>
            </div>
            @endif
            @endforeach
            @endif
            
            
          </div>
        </div>
      </div>
      <div class="col-md-12 mrg-top-20 text-center">
        <a href="{{route('timeline')}}" class="btn theme-btn btn-m">Go to Timeline</a>
      </div>
    </div>
  </section>
  <!-- machine post end  -->



  <!-- compnaies start -->

  <section class="padd-top-80 padd-bot-80">
    <div class="container"> 
      <!-- <ul class="nav nav-tabs nav-advance theme-bg" role="tablist">
        <li class="nav-item active"> <a class="nav-link" data-toggle="tab" href="#recent" role="tab"> Latest Jobs</a> </li>
        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#" role="tab"> Recent Jobs</a> </li>
      </ul> -->

      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h2>Companies</h2>  
            <p>Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>	
          </div>
        </div>
      </div>
      <div class="tab-content"> 
        <div class="tab-pane fade in show active" id="recent" role="tabpanel">
          <div class="row"> 
            <!-- Single Job -->
            @if($company)
            @foreach($company as $lo => $co)
            @if($lo<8)
            <div class="col-md-3 col-sm-6">
              <div class="utf_grid_job_widget_area"> <span class="job-type full-type">Full Time</span>
                <div class="utf_job_like">
                  <label class="toggler toggler-danger">
                    <input type="checkbox" >
                    <i class="fa fa-heart"></i> 
                  </label>
                </div>
                <div class="u-content">
                  <div class="avatar box-80"> <a href="{{route('show_company_profile',$co->id)}}"><img class="img-responsive" src="{{asset('photos/company/'.$co->photo)}}" alt=""> </a> </div>
                  <h5><a href="employer-detail.html">Product Redesign</a></h5>
                  <p class="text-muted" style="max-height:20px; overflow: hidden;">{{$co->address}}</p>
                </div>
                <div class="utf_apply_job_btn_item"> <a href="{{route('show_company_profile',$co->id)}}" class="btn job-browse-btn btn-radius br-light">Visit Company</a> </div>
              </div>
            </div>
            @endif
            @endforeach
            @endif
            
            
          </div>
        </div>
      </div>
      <div class="col-md-12 mrg-top-20 text-center">
        <a href="{{route('all_post')}}" class="btn theme-btn btn-m">Browse All Posts</a>
      </div>
    </div>
</section>
  
@endsection
   <!-- compnaies end -->
{{-- end of the content section --}}

{{-- start categories --}}
@section('categories')
<section class="utf_job_category_area">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h2>Job Categories</h2>  
            <p>Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>	
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-md-12">
          @if($category)
		@foreach($category as $k => $l)
    @if($k<8)
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
      @endif
		  @endforeach
		  @endif
            
            <div class="col-md-12 mrg-top-20 text-center">
              <a href="{{route('all_category')}}" class="btn theme-btn btn-m">View All Categories</a>
            </div>
        </div>
      </div>
    </div>
  </section>
  
    
@endsection
{{-- categories end --}}
