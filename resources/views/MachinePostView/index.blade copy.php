@extends('front.layout')
@section('content')
<!-- ======================= Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Busy or Available machine status</h2>
      <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i> Timeline</p>
    </div>
  </div>
</div>
<!-- ======================= End Page Title ===================== --> 

<!-- ====================== Start Job Detail 2 ================ -->
<section class="padd-top-80 padd-bot-80">
  <div class="container"> 
    <div class="row"> 
        <div class="col-md-3">
            <div id="leftcol_item">
              {{-- <div class="user_dashboard_pic"> <img alt="user photo" src="{{asset('photos/profile/')}}"> <span class="user-photo-action">  {{ Auth::user()->name }}</span> </div> --}}
            </div>
            <div class="dashboard_nav_item">
              
            </div>
        </div>
      
      <!-- Start Job List -->
     
        <div class="col-md-9 col-sm-12 col-xs-12">
     
            <h4 style="text-align:center;">Mark As Busy Or Available Machine</h4>
            <form action="">

        <table class="table table-bordered">
          <tr>
              <th>Title</th>
              <th>Number of  machine</th>
          <th>Number of Available machine</th>
      
          <th>Status</th>
          <th>Action</th>
         
         
            </tr>
            @foreach ($data as $k=>$d)
            <tr>

          <td>{{$d->title}}</td>
          <td>{{$d->number_of_machine}}</td>
          <td>{{$d->number_of_available}}</td>
          <td>{{$d->status}}</td>
          <td>
          <a href="{{route('edit_status',$d->id)}}" class="btn btn-success">Edit</a>
        </td>
            </tr>
            @endforeach
        

        </table>

            </form>
         
          </div>

        <!-- Single Verticle job -->
        {{-- <div class="job-verticle-list">
          <div class="vertical-job-card">
            <div class="vertical-job-header">
              <div class="vrt-job-cmp-logo"> <a href="job-detail.html"><img src="assets/img/company_logo_2.png" class="img-responsive" alt="" /></a> </div>
              <h4><a href="job-detail.html">Google LTD</a></h4>
              <span class="com-tagline">Software Development</span> <span class="pull-right vacancy-no">No. <span class="v-count">2</span></span> 
			</div>
            
                  <ul class="can-skils">
                    <li><strong>Job Id: </strong>G58726</li>
                    <li><strong>Job Type: </strong>Full Time</li>
                    <li><strong>Skills: </strong> <div><span class="skill-tag">HTML</span> <span class="skill-tag">css</span> <span class="skill-tag">java</span> <span class="skill-tag">php</span></div> </li>
                    <li><strong>Experience: </strong>3 Year</li>
                    <li><strong>Location: </strong>2844 Counts Lane, KY 45241</li>
                  </ul>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                  <div class="vrt-job-act"> <a href="#" data-toggle="modal" data-target="#apply-job" class="btn-job theme-btn job-apply">Apply Now</a> <a href="job-detail.html" title="" class="btn-job light-gray-btn">View Job</a> </div>
                </div>
              </div>
            </div>            
          </div>
        </div> --}}
        
        <!-- Single Verticle job -->
        {{-- <div class="job-verticle-list">
          <div class="vertical-job-card">
            <div class="vertical-job-header">
              <div class="vrt-job-cmp-logo"> <a href="job-detail.html"><img src="assets/img/company_logo_3.png" class="img-responsive" alt="" /></a> </div>
              <h4><a href="job-detail.html">Laxol LTD</a></h4>
              <span class="com-tagline">Frond End Designer</span> <span class="pull-right vacancy-no">No. <span class="v-count">2</span></span> 
			</div>
            <div class="vertical-job-body">
              <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                  <ul class="can-skils">
                    <li><strong>Job Id: </strong>G58726</li>
                    <li><strong>Job Type: </strong>Full Time</li>
                    <li><strong>Skills: </strong> <div><span class="skill-tag">HTML</span> <span class="skill-tag">css</span> <span class="skill-tag">java</span> <span class="skill-tag">php</span></div> </li>
                    <li><strong>Experience: </strong>3 Year</li>
                    <li><strong>Location: </strong>2844 Counts Lane, KY 45241</li>
                  </ul>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                  <div class="vrt-job-act"> <a href="#" data-toggle="modal" data-target="#apply-job" class="btn-job theme-btn job-apply">Apply Now</a> <a href="job-detail.html" title="" class="btn-job light-gray-btn">View Job</a> </div>
                </div>
              </div>
            </div>            
          </div>
        </div> --}}
        
        <!-- Single Verticle job -->
        {{-- <div class="job-verticle-list">
          <div class="vertical-job-card">
            <div class="vertical-job-header">
              <div class="vrt-job-cmp-logo"> <a href="job-detail.html"><img src="assets/img/company_logo_4.png" class="img-responsive" alt="" /></a> </div>
              <h4><a href="job-detail.html">Sirix LTD</a></h4>
              <span class="com-tagline">CMS Development</span> <span class="pull-right vacancy-no">No. <span class="v-count">2</span></span> 
			</div>
            <div class="vertical-job-body">
              <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                  <ul class="can-skils">
                    <li><strong>Job Id: </strong>G58726</li>
                    <li><strong>Job Type: </strong>Full Time</li>
                    <li><strong>Skills: </strong> <div><span class="skill-tag">HTML</span> <span class="skill-tag">css</span> <span class="skill-tag">java</span> <span class="skill-tag">php</span></div> </li>
                    <li><strong>Experience: </strong>3 Year</li>
                    <li><strong>Location: </strong>2844 Counts Lane, KY 45241</li>
                  </ul>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                  <div class="vrt-job-act"> <a href="#" data-toggle="modal" data-target="#apply-job" class="btn-job theme-btn job-apply">Apply Now</a> <a href="job-detail.html" title="" class="btn-job light-gray-btn">View Job</a> </div>
                </div>
              </div>
            </div>            
          </div>
        </div> --}}
        
        <!-- Single Verticle job -->
        {{-- <div class="job-verticle-list">
          <div class="vertical-job-card">
            <div class="vertical-job-header">
              <div class="vrt-job-cmp-logo"> <a href="job-detail.html"><img src="assets/img/company_logo_5.png" class="img-responsive" alt="" /></a> </div>
              <h4><a href="job-detail.html">Indico LTD</a></h4>
              <span class="com-tagline">PHP Development</span> <span class="pull-right vacancy-no">No. <span class="v-count">2</span></span> 
			</div>
            <div class="vertical-job-body">
              <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                  <ul class="can-skils">
                    <li><strong>Job Id: </strong>G58726</li>
                    <li><strong>Job Type: </strong>Full Time</li>
                    <li><strong>Skills: </strong> <div><span class="skill-tag">HTML</span> <span class="skill-tag">css</span> <span class="skill-tag">java</span> <span class="skill-tag">php</span></div> </li>
                    <li><strong>Experience: </strong>3 Year</li>
                    <li><strong>Location: </strong>2844 Counts Lane, KY 45241</li>
                  </ul>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                  <div class="vrt-job-act"> <a href="#" data-toggle="modal" data-target="#apply-job" class="btn-job theme-btn job-apply">Apply Now</a> <a href="job-detail.html" title="" class="btn-job light-gray-btn">View Job</a> </div>
                </div>
              </div>
            </div>            
          </div>
        </div> --}}
        {{-- <div class="clearfix"></div> --}}
		{{-- <div class="utf_flexbox_area padd-0">
			<ul class="pagination">
			  <li class="page-item"> <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">«</span> <span class="sr-only">Previous</span> </a> </li>
			  <li class="page-item active"><a class="page-link" href="#">1</a></li>
			  <li class="page-item"><a class="page-link" href="#">2</a></li>
			  <li class="page-item"><a class="page-link" href="#">3</a></li>
			  <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">»</span> <span class="sr-only">Next</span> </a> </li>
			</ul>
		</div> --}}
      {{-- </div> --}}
    </div>
    <!-- End Row --> 
  </div>
</section>
<!-- ====================== End Job Detail 2 ================ --> 

@endsection




