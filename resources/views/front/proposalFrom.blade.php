@extends('front.layout')
@section('bennar')
<div class="page-title">
    <div class="container">
      <div class="page-caption">
        <h2>Proposal From</h2>
        <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i>@if ($name=='machine')
            {{ 'Machine Post Proposal From'}}
           
        @elseif($name=='workOrder')
        {{ 'Work Order Post Proposal From'}}
        @endif</p>
      </div>
    </div>
  </div>
    
@endsection
@section('content')
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
        <h3>Proposal Form</h3>
        <div style="padding-top:50px"></div>
        <form action="{{route('savePropusal')}}" method="post">
            @csrf
            <table class="table table-bordered">
                <tr> 
                    @if ($name=='machine')
                    <td>Machine Post</td>
                    <td >{{$machinePost->title}}
                        <input type="hidden" name="machinepost_id" value="{{$machinePost->id}}">
                          
                    </td>
                    
                    <td>Work Order </td>
                    <td >
                        <select name="workorder_id" id="" class="form-control wide">
                            <option value="">Select Work Order</option>
                            @foreach ($workOrder as $post)
                            <option value="{{$post->id}}">{{$post->title}}</option>
                            @endforeach
                           
                        </select> 
                        @error('workorder_id')
                            <span style="color: red">{{$message}}</span>
                        @enderror   
                    </td>
                        
                    @elseif($name=='workOrder')
                    <td>Machine Post</td>
                    <td >
                        <select name="machinepost_id" id="" class="form-control wide">
                            <option value="">Select Machine Post</option>
                            @foreach ($machinePost as $post)
                               <option value="{{$post->id}}">{{$post->title}}</option>
                            @endforeach
                            
                        </select>   
                        @error('machinepost_id')
                            <span style="color: red">{{$message}}</span>
                        @enderror 
                    </td>
                    
                    <td>Work Order Post</td>
                    <td >{{$workOrder->title}}
                        <input type="hidden" value="{{$workOrder->id}}" name="workorder_id">
                          
                    </td>
                    @endif
                   
                    
                   
                </tr>
                <tr>
                    <td>Title</td>
                    <td >
                        <input type="text" name="title" class="form-control" placeholder="Proposal Title" value="{{old('title')}}">
                        @error('title')
                            <span style="color: red">{{$message}}</span>
                        @enderror
                    </td>
                    <td>Budget</td>
                    <td>
                        <input type="text" name="budget" class="form-control" placeholder="Proposal Budget" value="{{old('budget')}}">
                        @error('budget')
                            <span style="color: red">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td>
                        <input type="text" name="quantity" class="form-control" placeholder="Quantity" value="{{old('quantity')}}">
                        @error('quantity')
                            <span style="color: red">{{$message}}</span>
                        @enderror
                    </td>
                    <td>Quality Related</td>
                    <td>
                        <input type="text" name="quality_related" class="form-control" placeholder="Write something about the Quality " value="{{old('quality_related')}}">
                        @error('quality_related')
                            <span style="color: red">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Message</td>
                    <td colspan="3">
                        <textarea name="message" id="" cols="15" rows="5" class="form-control" placeholder="Write something about your proposal or about your idea">{{old('message')}}</textarea>
                        @error('message')
                            <span style="color: red">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Deadline</td>
                    <td>
                        <input type="date" name="deadline" class="form-control" value="{{old('deadline')}}">
                        @error('deadline')
                            <span style="color: red">{{$message}}</span>
                        @enderror
                    </td>
                    <td colspan="2"><input type="submit" class="btn btn-primary btn-block"></td>
                </tr>
            </table>
        </form>
        
        
        
      </div>
      </div>
    </div>
</section>
    
@endsection