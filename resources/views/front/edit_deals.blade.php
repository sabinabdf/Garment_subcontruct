@extends('front.layout')
@section('content')
<!-- ======================= Start Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Accept Deals</h2>
      <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i>Accept Deals</p>
    </div>
  </div>
</div>
<!-- ======================= End Page Title ===================== --> 
<!-- ====================== Start Signup Form ============= -->
<section class="padd-top-80 padd-bot-80">
  <div class="container">
    <div class="row"> 
      <div class="col-md-3">
		<div id="leftcol_item">
		  <div class="user_dashboard_pic"> <img alt="user photo" src="{{asset('photos/profile/'.$data->photo)}}"> <span class="user-photo-action">{{ Auth::user()->name }}</span> </div>
		</div>
		<div class="dashboard_nav_item">
		  <ul>
		    <li class="active"><a href="{{route('dashboard')}}"><i class="login-icon ti-dashboard"></i> Dashboard</a></li>
			<li><a href="{{route('profile')}}"><i class="login-icon ti-user"></i> Edit Profile</a></li>
			<li><a href="{{route('c_pass')}}"><i class="login-icon ti-key"></i> Change Password</a></li>
			<li><a href="#"><i class="login-icon ti-power-off"></i> Logout</a></li>
		  </ul>
		</div>
      </div>
    

  
      <div class="log-box col-md-8" style="margin-left:100px">
        <form class="log-form" method="POST" action=" {{route('update_deals',$edit_deal->id)}}" enctype="multipart/form-data">
            {{-- {{route('accept_deal')}} --}}
            
        @csrf
        @method('put')
        

        <div class="col-md-6">
            <label>{{ __('Merchant Company Name') }}</label>
            <div class="form-group">
               
                  <select name="merchant_id" id="" >
                    
                      <option value="{{$edit_deal->marchant->id}}">{{$edit_deal->marchant->name}}</option>
                      
                  </select>

                  @error('merchant_id')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
            </div>
          </div>
        

            <div class="col-md-6">
                <label>{{ __('Seller Company Name') }}</label>
                <div class="form-group">
                   
                      
                      <select name="seller_id" id="">
                       
                          <option value="{{$edit_deal->seller->id}}">{{$edit_deal->seller->name}}</option>
                          
                      </select>
  
                      @error('seller_id')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
              </div>
              

              <div class="col-md-6">
                <label>{{ __('Machine Name') }}</label>
                <div class="form-group">
                    
                      
                      <select name="machine_id" id="" >
                       
                        {{-- <option value="">Select Machine</option> --}}
                          <option value="{{$edit_deal->machineID->id}}">{{$edit_deal->machineID->name}}</option>
                         
                      </select>
  
                      @error('machine_id')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
              </div>
              <br>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control"  name="title" value="{{$edit_deal->title}}" required>
                  
                  @error('title')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                </div>
              </div>

              @php
                   $specData=json_decode($edit_deal->specifications); 
                  //  print_r($specData);
                @endphp
                 @foreach ($specData as $key=>$value)
              
                <div class="col-md-6">
                  <div class="form-group">
                        <label>{{ __('Specification Title') }}</label>
                        <input id="specifications" type="text" class="form-control @error('specifications') is-invalid @enderror" name="spec_title[]" value="{{$key}}" required autocomplete="specifications" autofocus >
                       
    
                        @error('spec_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                </div>
  
                <div class="col-md-6">
                  <div class="form-group">
                        <label>{{ __('Specification Value') }}</label>
                        <input id="specifications" type="text" class="form-control @error('specifications') is-invalid @enderror" name="spec_value[]" value="{{$value}}" required autocomplete="specifications" autofocus >
                       
    
                        @error('spec_value')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                </div>
                @endforeach
                {{-- <div id="new" class="col-md-12 form-group"></div>
              <a id="remove"></a>
              
              <a class="btn btn-info" id="addMore" style="margin-top: -35px">+</a> --}}


            <div class="col-md-6">
              <div class="form-group">
                <label>Budget</label>
                <input type="text" class="form-control"  name="budget" value="{{$edit_deal->budget}}
                " required>
                
                @error('budget')
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                      </span>
                         @enderror
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label>Advance Amount</label>
                  <input type="text" class="form-control"  name="advance_amount" value="{{$edit_deal->advance_amount}}" required>
                
                  @error('advance_amount')
                       <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                           @enderror
                </div>
              </div>

              

            <div class="col-md-6">
              <div class="form-group">
                <label>Deadline</label>
                <input type="text" class="form-control"  name="deadline" value=" {{$edit_deal->deadline}}" required>
               
                @error('deadline')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label>Quantity</label>
                  <input type="text" class="form-control" name="quantity" value="{{$edit_deal->quantity}}" required>
                  
                  @error('quantity')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Quality related</label>
                  <input type="text" class="form-control" name="quality_related" value="{{$edit_deal->quality_related}}" required>
                  
                  @error('quality_related')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                </div>
              </div>

              
              <div class="col-md-6">
                <label>{{ __('Advance Paid') }} &nbsp;&nbsp;</label>
                <div class="form-group"  style="border:1px solid rgb(218, 215, 215);padding-bottom:12px;border-radius:4px">
                      

                      <input id="advance_paid" type="radio" class="@error('advance_paid') is-invalid @enderror" name="advance_paid" value="yes" autocomplete="advance_paid" autofocus placeholder="title"  style="margin-left:15px;margin-top:15px ">Yes &nbsp;&nbsp;

                      <input id="advance_paid" type="radio" class="@error('advance_paid') is-invalid @enderror" name="advance_paid" value="no" autocomplete="advance_paid" autofocus placeholder="title">No &nbsp;&nbsp;
  
                      @error('advance_paid')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
              </div>    
            
            <div class="col-md-12">
              <div class="form-group text-center mrg-top-15">
                <button type="submit" class="btn theme-btn btn-m full-width">Update Deal</button>
              </div>
            </div>
			<div class="clearfix"></div>			
        </form>
      </div>
      </div>
      </div>
  {{-- </div> --}}

</section>
<!-- ====================== End Signup Form ============= --> 
@endsection

{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
  
    $(document).ready(function(){
        let sl =0;
        $('#addMore').on('click',function(){
            sl++
            //  alert('ok')
            let div = "<div class='new_fild_"+sl+"'><hr><div class='col-md-6'>Specification Title <input type='text' class='form-control remove_"+sl+"' name='spec_title[]'></div><div class='col-md-6'>Specification Value <input type='text' class='form-control remove_"+sl+"' name='spec_value[]'></div><a class='btn btn-danger' value='"+sl+"' id='removeFild'>X</a></div>"
           
            
            $('#new').append(div)
           
             
        });
       $(document).on('click','#removeFild',function(){
        // alert('ok')
        // console.log('ok')
               let test = $(this).attr('value')
              $('.new_fild_'+ test).remove()

        });
     
    })
</script> --}}
