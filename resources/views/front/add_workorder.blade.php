@extends('front.layout')
@section('content')
<!-- ======================= Start Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Add new Order</h2>
      <p><a href="{{route('dashboard')}}" title="User Dashboard">User Dashboard</a> <i class="ti-angle-double-right"></i>Work Order</p>
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
    @include('front.dashSidebar')
      </div>
    {{-- djgdfjg --}}
      <div class="log-box col-md-8" style="margin-left:100px">

      <a href="{{route('dashboard')}}" class="btn btn-md " style="width:12%;background:#548CA8;color:white;"><i class="fas fa-arrow-left" style="color:white"></i>&nbsp;&nbsp;Back</a>
      <h3>Add Wok Order</h3>
        <form class="log-form" method="POST" action="{{route('save_order')}}" enctype="multipart/form-data">
        @csrf

        <div class="col-md-6">
            <label>{{ __('Company Name') }}</label>
            <div class="form-group">
                  
                  <select name="company_id" id="" >

                      {{-- <option value="">Select Company</option> --}}
                      @foreach ($company as $com)
                      <option value="{{$com->id}}">{{$com->name}}</option>
                          
                      @endforeach
                  </select>

                  @error('company_id')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
            </div>
          </div>
        

            <div class="col-md-6">
                <label>{{ __('Category Name') }}</label>
                <div class="form-group">
                      
                      <select name="category_id" id="">
  
                          <option value="">Select Category</option>
                          @foreach ($category as $c)
                          <option value="{{$c->id}}">{{$c->name}}</option>
                              
                          @endforeach
                      </select>
  
                      @error('category_id')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
              </div>
              <br><br><br><br>

              <div class="col-md-6">
                <label>{{ __('Machine Name') }}</label>
                <div class="form-group">
                      
                      <select name="machine_id" id="" >
  
                          <option value="">Select Machine</option>
                          @foreach ($machine as $m)
                          <option value="{{$m->id}}">{{$m->name}}</option>
                              
                          @endforeach
                      </select>
  
                      @error('machine_id')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
              </div>
              

              <div class="col-md-6">
                <div class="form-group">
                  <label>Quality related</label>
                  <input type="text" class="form-control" placeholder="quality_related" name="quality_related" value="{{ old('quality_related') }}" required>
                  @error('quality_related')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                </div>
              </div>   

              <div class="col-md-6">
                <div class="form-group">
                      <label>{{ __('Specification Title') }}</label>
                      <input id="specifications" type="text" class="form-control @error('specifications') is-invalid @enderror" name="spec_title[]" value="{{ old('specifications') }}" required autocomplete="specifications" autofocus placeholder=" specification title">
  
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
                      <input id="specifications" type="text" class="form-control @error('specifications') is-invalid @enderror" name="spec_value[]" value="{{ old('specifications') }}" required autocomplete="specifications" autofocus placeholder="specifications value">
  
                      @error('spec_value')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
              </div>
              <div id="new" class="col-md-12 form-group"></div>
              <a id="remove"></a>
              
              <a class="btn btn-info" id="addMore" style="margin-top: -35px">+</a>
              {{-- <button style="margin-left: 305px">+</button> --}}

            <div class="col-md-6">
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" placeholder="title" name="title" value="{{ old('title') }}" required>
                  @error('title')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                </div>
              </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Budget</label>
                <input type="text" class="form-control" placeholder="budget" name="budget" value="{{ old('budget') }}" required>
                @error('budget')
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                      </span>
                         @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Deadline</label>
                <input type="date" class="form-control" placeholder="Deadline" name="deadline" value="{{ old('deadline') }}" required>
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
                  <input type="text" class="form-control" placeholder="quantity" name="quantity" value="{{ old('quantity') }}" required>
                  @error('quantity')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                </div>
              </div>

            
            <div class="col-md-12">
              <div class="form-group text-center mrg-top-15">
                <button type="submit" class="btn theme-btn btn-m full-width">Place Order</button>
              </div>
            </div>
			<div class="clearfix"></div>			
        </form>
      </div>
      </div>
  </div>
</section>
<!-- ====================== End Signup Form ============= --> 
@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

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
</script>
