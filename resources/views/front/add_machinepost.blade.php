@extends('front.layout')
@section('content')
<!-- ======================= Start Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Post Available Machine</h2>
      <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i>Post Available Machine</p>
    </div>
  </div>
</div>
<!-- ======================= End Page Title ===================== --> 
<!-- ====================== Start Signup Form ============= -->
<section class="padd-top-80 padd-bot-80">
  <div class="container">
      <div class="log-box">
        <form class="log-form" method="POST" action="{{route('save_machinepost')}}" enctype="multipart/form-data">
        @csrf


        <table class="table">
          <tr>
            <td>{{ __('Title') }}</td>
            <td> <input type="text" value="" class="form-control"></td>
           


            <?php
           
            
        
            ?>
            <td>{{ __('Title') }}</td>
            <td> <input type="text" value="" class="form-control"></td>
          </tr>
        </table>
             

           
           
                  
			<div class="clearfix"></div>			
        </form>
      </div>
  </div>
</section>
<!-- ====================== End Signup Form ============= --> 
@endsection
