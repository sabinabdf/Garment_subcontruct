@extends('front.layout')
@section('content')
<!-- ======================= Page Title ===================== -->
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Profile Settings</h2>
            <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i>Update Proposal</p>
        </div>
    </div>
</div>
<!-- ======================= End Page Title ===================== -->

<!-- ================ Profile Settings ======================= -->
<section class="padd-top-80 padd-bot-80">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div id="leftcol_item">
                    <div class="user_dashboard_pic"> <img alt="user photo"
                            src="{{asset('photos/profile/'.$data->photo)}}"> <span class="user-photo-action"> {{
                            Auth::user()->name }}</span> </div>
                </div>
                <div class="dashboard_nav_item">
                    <ul>
                        <li><a href="{{route('dashboard')}}"><i class="login-icon ti-dashboard"></i> Dashboard</a></li>
                        <li ><a href="{{route('profile')}}"><i class="login-icon ti-user"></i> Edit
                                Profile</a></li>
                        <li><a href="{{route('userMacines')}}"><i class="login-icon ti-user"></i>Machine Upload</a></li>
                        <li><a href="{{route('getUserMachine')}}"><i class="login-icon ti-user"></i>Machine List</a>
                        </li>
                        <li class="active"><a href="{{route('proposalList')}}"><i class="login-icon ti-user"></i> My Proposal List</a></li>
                        <li><a href="{{route('c_pass')}}"><i class="login-icon ti-key"></i> Change Password</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="login-icon ti-power-off"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile_detail_block">
                    <form action="{{route('updatePropusal',$proposal->id)}}" method="post">
                        @csrf
                        @method('put')
                        <table class="table table-bordered">
                            <tr> 
                                @if ($p=='machinePost')
                                <td>Machine</td>
                                <td >{{$machinePost->title}}
                                    <input type="hidden" name="machinepost_id" value="{{$machinePost->id}}">
                                      
                                </td>
                                
                                <td>Work Order </td>
                                <td >
                                    <select name="workorder_id" id="" class="form-control wide">
                                        <option value="{{$proposal->workorder_id}}">{{$proposal->workorder->title}}</option>
                                        @foreach ($workOrder as $post)
                                        <option value="{{$post->id}}">{{$post->title}}</option>
                                        @endforeach
                                       
                                    </select> 
                                    
                                </td>
                                    
                                @elseif($p=='workorderPost')
                                <td>Machine Post</td>
                                <td >
                                    <select name="machinepost_id" id="" class="form-control wide">
                                        <option value="{{$proposal->machinepost_id}}">{{$proposal->machinepost->title}}</option>
                                        @foreach ($machinePost as $post)
                                           <option value="{{$post->id}}">{{$post->title}}</option>
                                        @endforeach
                                        
                                    </select>   
                                   
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
                                    <input type="text" name="title" class="form-control" placeholder="Proposal Title" value="{{$proposal->title}}">
                                    
                                </td>
                                <td>Budget</td>
                                <td>
                                    <input type="text" name="budget" class="form-control" placeholder="Proposal Budget" value="{{$proposal->budget}}">
                                  
                                </td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td>
                                    <input type="text" name="quantity" class="form-control" placeholder="Quantity" value="{{$proposal->quantity}}">
                                    
                                </td>
                                <td>Quality Related</td>
                                <td>
                                    <input type="text" name="quality_related" class="form-control" placeholder="Write something about the Quality " value="{{$proposal->quality_related}}">
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>Message</td>
                                <td colspan="3">
                                    <textarea name="message" id="" cols="15" rows="5" class="form-control" placeholder="Write something about your proposal or about your idea">{{$proposal->message}}</textarea>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>Deadline</td>
                                <td>
                                    <input type="date" name="deadline" class="form-control" value="{{$proposal->deadline}}">
                                    
                                </td>
                                <td colspan="2"><input type="submit" class="btn btn-primary btn-block" value="Update"></td>
                            </tr>
                        </table>
                    </form>
            </div>
        </div>
    </div>
</section>
<!-- ================ End Profile Settings ======================= -->
@endsection