@extends('front.layout')
@section('content')
<!-- ======================= Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Employer Detail</h2>
      <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i> Employer Detail</p>
    </div>
  </div>
</div>
<!-- ======================= End Page Title ===================== --> 

<!-- ================ Employer Profile ======================= -->
<section class="padd-top-80 padd-bot-50">
  <div class="container">
	<div class="user_acount_info">
		<div class="col-md-3 col-sm-5">
      
        <?php if(isset($work)){ ?>
		  <div class="emp-pic"> <img class="img-responsive width-270" src=" {{asset('photos/company/'.$work->Companies->photo)}}" alt=""> </div>
          </div>
		<div class="col-md-9 col-sm-7">
		  <div class="emp-des">
			<h3>{{$work->companies->name}}</h3>
			<span class="theme-cl">{{$work->category->name}}</span>
			<ul class="employer_detail_item">
			  <li><i class="ti-credit-card padd-r-10"></i>Budget :   {{$work->budget}}</li>
              <li><i class="ti-credit-card padd-r-10"></i>MT-587, Near Bue Market Qch52, New York</li>
              <li><i class="ti-credit-card padd-r-10"></i>Deadline : {{  date("d M Y", strtotime($work->deadline)) }}</li>
              
			  <li><i class="ti-world padd-r-10"></i>https://www.example.com</li>
			  <li><i class="ti-world padd-r-10"> Machine Name : {{$work->Machine->name}}</i></li>
			  <li><i class="ti-mobile padd-r-10"></i>91 234 567 8765</li>
			  <li><i class="ti-email padd-r-10"></i>mail@example.com</li>
			  <li><i class="ti-pencil-alt padd-r-10"></i>Bachelor Degree</li>
			  <li><i class="ti-shield padd-r-10"></i>3 Year Exp.</li>
			</ul>
		  </div>  
          <?php } ?>

         <?php if(isset($machine)){ ?>
		  <div class="emp-pic"> <img class="img-responsive width-270" src=" {{asset('photos/company/'.$machine->usermachines->company->photo)}}" alt=""> </div>
          
          
		</div>
		<div class="col-md-9 col-sm-7">
		  <div class="emp-des">
			<h3>{{$machine->usermachines->company->name}}</h3>
			<span class="theme-cl">{{$machine->usermachines->category->name}}</span>
			<ul class="employer_detail_item">
			  <li><i class="ti-credit-card padd-r-10"></i>MT-587, Near Bue Market Qch52, New York</li>
			  <li><i class="ti-world padd-r-10"></i>https://www.example.com</li>
			  <li><i class="ti-mobile padd-r-10"></i>91 234 567 8765</li>
			  <li><i class="ti-email padd-r-10"></i>mail@example.com</li>
			  <li><i class="ti-pencil-alt padd-r-10"></i>Bachelor Degree</li>
			  <li><i class="ti-shield padd-r-10"></i>3 Year Exp.</li>
			</ul>
		  </div>  
          
          <?php } ?>
		</div> 
	</div> 	
  </div>
</section>
<!-- ================ End Employer Profile ======================= --> 

<!-- ================ Employers Jobs ======================= -->
<section class="padd-top-30">
  <div class="container">
    <div class="row"> 
      <!-- Single Job -->
      <div class="col-md-3 col-sm-6">
        <div class="utf_grid_job_widget_area"> <span class="job-type full-type">Full Time</span>
          <div class="utf_job_like">
            <label class="toggler toggler-danger">
              <input type="checkbox" checked>
              <i class="fa fa-heart"></i> 
			</label>
          </div>
          <div class="u-content">
            <div class="avatar box-80"> <a href="employer-detail.html"> <img class="img-responsive" src="{{url('Front_Assets/img/company_logo_1.png')}}" alt=""> </a> </div>
            <h5><a href="employer-detail.html">Product Redesign</a></h5>
            <p class="text-muted">2708 Scenic Way, IL 62373</p>
          </div>
          <div class="utf_apply_job_btn_item"> <a href="job-detail.html" class="btn job-browse-btn btn-radius br-light">Apply Now</a> </div>
        </div>
      </div>
      
      <!-- Single Job -->
      <div class="col-md-3 col-sm-6">
        <div class="utf_grid_job_widget_area"> <span class="job-type full-type">Full Time</span>
          <div class="utf_job_like">
            <label class="toggler toggler-danger">
              <input type="checkbox">
              <i class="fa fa-heart"></i> 
			</label>
          </div>
          <div class="u-content">
            <div class="avatar box-80"> <a href="employer-detail.html"> <img class="img-responsive" src="{{url('Front_Assets/img/company_logo_2.png')}}" alt=""> </a> </div>
            <h5><a href="employer-detail.html">New Product Mockup</a></h5>
            <p class="text-muted">2708 Scenic Way, IL 62373</p>
          </div>
          <div class="utf_apply_job_btn_item"> <a href="job-detail.html" class="btn job-browse-btn btn-radius br-light">Apply Now</a> </div>
        </div>
      </div>
      
      <!-- Single Job -->
      <div class="col-md-3 col-sm-6">
        <div class="utf_grid_job_widget_area"> <span class="job-type part-type">Part Time</span>
          <div class="utf_job_like">
            <label class="toggler toggler-danger">
              <input type="checkbox">
              <i class="fa fa-heart"></i> 
			</label>
          </div>
          <div class="u-content">
            <div class="avatar box-80"> <a href="employer-detail.html"> <img class="img-responsive" src="{{url('Front_Assets/img/company_logo_6.png')}}" alt=""> </a> </div>
            <h5><a href="employer-detail.html">Front End Designer</a></h5>
            <p class="text-muted">3815 Forest Drive, Alexandria</p>
          </div>
          <div class="utf_apply_job_btn_item"> <a href="job-detail.html" class="btn job-browse-btn btn-radius br-light">Apply Now</a> </div>
        </div>
      </div>
      
      <!-- Single Job -->
      <div class="col-md-3 col-sm-6">
        <div class="utf_grid_job_widget_area"> <span class="job-type part-type">Part Time</span>
          <div class="utf_job_like">
            <label class="toggler toggler-danger">
              <input type="checkbox">
              <i class="fa fa-heart"></i> 
			</label>
          </div>
          <div class="u-content">
            <div class="avatar box-80"> <a href="employer-detail.html"> <img class="img-responsive" src="{{url('Front_Assets/img/company_logo_4.png')}}" alt=""> </a> </div>
            <h5><a href="employer-detail.html">Wordpress Developer</a></h5>
            <p class="text-muted">2719 Duff Avenue, Winooski</p>
          </div>
          <div class="utf_apply_job_btn_item"> <a href="job-detail.html" class="btn job-browse-btn btn-radius br-light">Apply Now</a> </div>
        </div>
      </div>
      
      <!-- Single Job -->
      <div class="col-md-3 col-sm-6">
        <div class="utf_grid_job_widget_area"> <span class="job-type part-type">Part Time</span>
          <div class="utf_job_like">
            <label class="toggler toggler-danger">
              <input type="checkbox">
              <i class="fa fa-heart"></i> 
			</label>
          </div>
          <div class="u-content">
            <div class="avatar box-80"> <a href="employer-detail.html"> <img class="img-responsive" src="{{url('Front_Assets/img/company_logo_8.png')}}" alt=""> </a> </div>
            <h5><a href="employer-detail.html">New Product Mockup</a></h5>
            <p class="text-muted">2865 Emma Street, Lubbock</p>
          </div>
          <div class="utf_apply_job_btn_item"> <a href="job-detail.html" class="btn job-browse-btn btn-radius br-light">Apply Now</a> </div>
        </div>
      </div>
      
      <!-- Single Job -->
      <div class="col-md-3 col-sm-6">
        <div class="utf_grid_job_widget_area"> <span class="job-type part-type">Part Time</span>
          <div class="utf_job_like">
            <label class="toggler toggler-danger">
              <input type="checkbox">
              <i class="fa fa-heart"></i> 
			</label>
          </div>
          <div class="u-content">
            <div class="avatar box-80"> <a href="employer-detail.html"> <img class="img-responsive" src="{{url('Front_Assets/img/company_logo_6.png')}}" alt=""> </a> </div>
            <h5><a href="employer-detail.html">Photoshop Designer</a></h5>
            <p class="text-muted">2865 Emma Street, Lubbock</p>
          </div>
          <div class="utf_apply_job_btn_item"> <a href="job-detail.html" class="btn job-browse-btn btn-radius br-light">Apply Now</a> </div>
        </div>
      </div>
      
      <!-- Single Job -->
      <div class="col-md-3 col-sm-6">
        <div class="utf_grid_job_widget_area"> <span class="job-type part-type">Part Time</span>
          <div class="utf_job_like">
            <label class="toggler toggler-danger">
              <input type="checkbox">
              <i class="fa fa-heart"></i> 
			</label>
          </div>
          <div class="u-content">
            <div class="avatar box-80"> <a href="employer-detail.html"> <img class="img-responsive" src="{{url('Front_Assets/assets/img/company_logo_6.png')}}" alt=""> </a> </div>
            <h5><a href="employer-detail.html">Front End Designer</a></h5>
            <p class="text-muted">3815 Forest Drive, Alexandria</p>
          </div>
          <div class="utf_apply_job_btn_item"> <a href="job-detail.html" class="btn job-browse-btn btn-radius br-light">Apply Now</a> </div>
        </div>
      </div>
      
      <!-- Single Job -->
      <div class="col-md-3 col-sm-6">
        <div class="utf_grid_job_widget_area"> <span class="job-type part-type">Part Time</span>
          <div class="utf_job_like">
            <label class="toggler toggler-danger">
              <input type="checkbox" checked>
              <i class="fa fa-heart"></i> 
			</label>
          </div>
          <div class="u-content">
            <div class="avatar box-80"> <a href="employer-detail.html"> <img class="img-responsive" src="{{url('Front_Assets/img/company_logo_8.png')}}" alt=""> </a> </div>
            <h5><a href="employer-detail.html">.Net Developer</a></h5>
            <p class="text-muted">3815 Forest Drive, Alexandria</p>
          </div>
          <div class="utf_apply_job_btn_item"> <a href="job-detail.html" class="btn job-browse-btn btn-radius br-light">Apply Now</a> </div>
        </div>
      </div>
    </div>
	<div class="clearfix"></div>
    <div class="utf_flexbox_area padd-0">
		<ul class="pagination">
		  <li class="page-item"> <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">«</span> <span class="sr-only">Previous</span> </a> </li>
		  <li class="page-item active"><a class="page-link" href="#">1</a></li>
		  <li class="page-item"><a class="page-link" href="#">2</a></li>
		  <li class="page-item"><a class="page-link" href="#">3</a></li>
		  <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">»</span> <span class="sr-only">Next</span> </a> </li>
		</ul>
	</div>
  </div>
</section>
<!-- ================ End Employers Jobs ======================= --> 
@endsection