@extends('front.layout')
<style>
.zoom {
  padding: 5px;
  background-color: white;
  transition: transform .2s; /* Animation */
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
@section('content')
<!-- ======================= Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Company Profile</h2>
      <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i> Company Profile</p>
    </div>
  </div>
</div>
<!-- ======================= End Page Title ===================== --> 

<!-- ====================== Start Job Detail 2 ================ -->
<section class="padd-top-80 padd-bot-60">
  <div class="container"> 
    <!-- row -->
    <div class="row">
      <div class="col-md-8 col-sm-7">
        <div class="detail-wrapper">
          <div class="detail-wrapper-body">
        <div class="row">
        <div class="col-md-4 text-center user_profile_img"> <img src="{{asset('photos/company/'.$data->photo)}}" class="width-100 zoom"  alt=""/>
          <h4 class="meg-0"> {{$data->name}} </h4>
          <span>{{$data->company_bio}} </span> 
          <div class="text-center">
          <button type="button" data-toggle="modal" data-target="#signin" class="btn-job theme-btn job-apply">Go Dashboard</button>
          </div>
        </div>
        <div class="col-md-8 user_job_detail">
          <div class="col-sm-12 mrg-bot-10"> <i class="ti-credit-card padd-r-10"></i> {{$data->address}} </div>
          <div class="col-sm-12 mrg-bot-10"> <i class="ti-mobile padd-r-10"></i> {{$data->phone}} </div>
          <div class="col-sm-12 mrg-bot-10"> <i class="ti-email padd-r-10"></i>{{$data->email}} </div>
          <div class="col-sm-12 mrg-bot-10"> <i class="ti-calendar padd-r-10"></i><span class="full-type">Full Time</span> </div>
          <div class="col-sm-12 mrg-bot-10"> <i class="ti-user padd-r-10"></i><span class="cl-danger">7 Open Position</span> </div>
          <div class="col-sm-12 mrg-bot-10"> <i class="ti-shield padd-r-10"></i>3 Years of Experience </div>
        </div>
      </div>
          </div>
        </div>
        <div class="detail-wrapper">
          <div class="detail-wrapper-header">
            <h4>About Company</h4>
          </div>
          <div class="detail-wrapper-body">
            <!-- <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue.</p>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p> -->
          <p>{{$data->company_profile_one}}</p>
          <p>@if($data){{$data->company_profile_two}}@endif</p>
          </div>
        </div>
          <div class="detail-wrapper">
              <div class="detail-wrapper-header">
                <h4>Certificates</h4>
              </div>
          <div class="detail-wrapper-body">
            

            <!-- slider start  -->
            
           <div class="col-md-12">
            
              <?php
            $d = $data->certificates;
          $f = json_decode($d);
          ?>
          @foreach ($f as $p)
          <div class="col-md-3 " style="padding-top:15px">
            
            <img class="zoom" src="{{asset('photos/company/'.$p)}}" alt="" style="height:150px;width:150px">
            </div>
            @endforeach
            </div>
            
        <ul class="detail-list">
              <!-- <li>Contrary to popular belief, Lorem Ipsum is not simply random text </li>
              <li>Latin professor at Hampden-Sydney College in Virginia </li>
              <li>looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage ideas </li>
              <li>The standard chunk of Lorem Ipsum used since the 1500s is reproduced </li>
              <li>accompanied by English versions from the 1914 translation by H. Rackham </li> -->
            </ul>
          
          <!--  -->
          </div>
        </div>


        
        <div class="detail-wrapper">
          <div class="detail-wrapper-header">
            <h4>Trade Licence</h4>
          </div>

          <div class="detail-wrapper-body">
          <div class="col-md-3 " style="padding-top:15px">
            
            <img class="zoom" src="{{asset('photos/company/'.$data->trade_license)}}" alt="" style="height:200px;width:200px">
            </div>
           
            
            <!-- <ul class="detail-list">
              <li>There are many variations of passages of Lorem Ipsum available</li>
              <li>the majority have suffered alteration in some form slightly</li>
              <li>you need to be sure there isn't anything embarrassing hidden</li>
              <li>generators on the Internet tend to repeat predefined chunks as necessary</li>
              <li>making this the first true generator on the Internet It uses a dictionary</li>
              <li>Ability to solve problems creatively and effectively</li>
              <li>combined with a handful of model sentence structures</li>
              <li>standard chunk of Lorem Ipsum used since the 1500s is reproduced</li>
            </ul> -->
            </div>
            
        <div class="detail-wrapper">
          <div class="detail-wrapper-header">
            <h4>Location</h4>
               </div>
            <div class="detail-wrapper-body">
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.566512514854!2d76.8192921147794!3d30.702470481647698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fecca1d6c0001%3A0xe4953728a502a8e2!2sChandigarh!5e0!3m2!1sen!2sin!4v1520136168627" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe> -->
              <iframe src="{{$data->map}}" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        
        </div>    

       
       
      </div>
      
      <!-- Sidebar -->
      <div class="col-md-4 col-sm-5">
        <div class="sidebar"> 
          <!-- Start: Job Overview -->
          <!-- <div class="widget-boxed">
            <div class="widget-boxed-header">
              <h4><i class="ti-location-pin padd-r-10"></i>Location</h4>
            </div>
            <div class="widget-boxed-body">
              <div class="side-list no-border">
                <ul>
                  <li><i class="ti-credit-card padd-r-10"></i>Dhanmondi, Dhaka 1211</li>
                  <li><i class="ti-world padd-r-10"></i>https://www.MyCompany.com</li>
                  <li><i class="ti-mobile padd-r-10"></i>01712345678</li>
                  <li><i class="ti-email padd-r-10"></i>mycompany@gmail.com</li>
                  <li><i class="ti-pencil-alt padd-r-10"></i>Bachelor Degree</li>
                  <li><i class="ti-shield padd-r-10"></i>3 Year Experience</li>
                </ul>                
              </div>
            </div>
          </div> -->
          <!-- End: Job Overview --> 
          
          <!-- Start: Opening hour -->
          <div class="widget-boxed">
            <div class="widget-boxed-header">
              <h4><i class="ti-time padd-r-10"></i>Opening Hours</h4>
            </div>
            <div class="widget-boxed-body">
              <div class="side-list">
                <ul>
                  <li>Monday <span>9 AM - 5 PM</span></li>
                  <li>Tuesday <span>9 AM - 5 PM</span></li>
                  <li>Wednesday <span>9 AM - 5 PM</span></li>
                  <li>Thursday <span>9 AM - 5 PM</span></li>
                  <li>Friday <span>9 AM - 5 PM</span></li>
                  <li>Saturday <span>9 AM - 3 PM</span></li>
                  <li>Sunday <span>Closed</span></li>
                </ul>
              </div>
            </div>
          </div>
      
      <!-- Start: Location -->
          <div class="widget-boxed">
            <div class="widget-boxed-header">
              <h4><i class="ti-time padd-r-10"></i>Location</h4>
            </div>
            <div class="widget-boxed-body">
              <iframe src="{{$data->map}}" width="100%" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Row --> 
    
    <div class="row">
      <div class="col-md-12">
        <h4 class="mrg-bot-30">Similar Jobs</h4>
      </div>
    </div>
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
            <div class="avatar box-80"> <a href="employer-detail.html"> <img class="img-responsive" src="{{asset('Front_Assets/img/company_logo_1.png')}}" alt=""> </a> </div>
            <!-- <h5><a href="employer-detail.html">Product Redesign</a></h5>
            <p class="text-muted">2708 Scenic Way, IL 62373</p> -->
          </div>
          <!-- <div class="utf_apply_job_btn_item"> <a href="job-detail.html" class="btn job-browse-btn btn-radius br-light">Apply Now</a> </div> -->
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
            <div class="avatar box-80"> <a href="employer-detail.html"> <img class="img-responsive" src="{{asset('Front_Assets/img/company_logo_2.png')}}" alt=""> </a> </div>
            <!-- <h5><a href="employer-detail.html">New Product Mockup</a></h5>
            <p class="text-muted">2708 Scenic Way, IL 62373</p> -->
          </div>
          <!-- <div class="utf_apply_job_btn_item"> <a href="job-detail.html" class="btn job-browse-btn btn-radius br-light">Apply Now</a> </div> -->
        </div>
      </div>
      
      <!-- Single Job -->
      <div class="col-md-3 col-sm-6">
        <div class="utf_grid_job_widget_area"> <span class="job-type part-type">Full Time</span>
          <div class="utf_job_like">
            <label class="toggler toggler-danger">
              <input type="checkbox" checked>
              <i class="fa fa-heart"></i> 
      </label>
          </div>
          <div class="u-content">
            <div class="avatar box-80"> <a href="employer-detail.html"> <img class="img-responsive" src="{{asset('Front_Assets/img/company_logo_3.png')}}" alt=""> </a> </div>
            <!-- <h5><a href="employer-detail.html">Custom Php Developer</a></h5>
            <p class="text-muted">3765 C Street, Worcester</p> -->
          </div>
          <!-- <div class="utf_apply_job_btn_item"> <a href="job-detail.html" class="btn job-browse-btn btn-radius br-light">Apply Now</a> </div> -->
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
            <div class="avatar box-80"> <a href="employer-detail.html"> <img class="img-responsive" src="{{asset('Front_Assets/img/company_logo_4.png')}}" alt=""> </a> </div>
            <!-- <h5><a href="employer-detail.html">Wordpress Developer</a></h5>
            <p class="text-muted">2719 Duff Avenue, Winooski</p>
          </div>
          <div class="utf_apply_job_btn_item"> <a href="job-detail.html" class="btn job-browse-btn btn-radius br-light">Apply Now </a> </div> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="padd-top-80 padd-bot-60">
  <div class="container">
      <h5>Machine Posts</h5>
        <div class="newsletter-box text-center">
          <div class="input-group"> <span class="input-group-addon"><span class="ti-email theme-cl"></span></span>
            <input type="text" class="form-control" placeholder="Machine Posts here...">
          </div>
          <!-- <button type="button" class="btn theme-btn btn-radius btn-m">Subscribe</button> -->
        </div>
      <h5>Works Posts</h5>
        <div class="newsletter-box text-center">
          <div class="input-group"> <span class="input-group-addon"><span class="ti-email theme-cl"></span></span>
            <input type="text" class="form-control" placeholder="Works Posts...">
          </div>
          <!-- <button type="button" class="btn theme-btn btn-radius btn-m">Subscribe</button> -->
        </div>
  </div>
</section>
<!-- ====================== End Job Detail 2 ================ --> 

@endsection
