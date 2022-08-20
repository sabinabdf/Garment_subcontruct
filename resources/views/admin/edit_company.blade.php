@extends('admin/layout')

@section('content')

<div class="row">
    <div class="col-sm-12">
     

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Company</h3></div>
            <div class="card-body">
                <div class="form">
                    <form class="cmxform form-horizontal tasi-form"  method="post" action="{{route('companies.update',$data->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')    
                    <table class="table">
                            <tr>
                                <td> <label for="name" class="">Name </label></td>
                                <td colspan="2"><input class="form-control" type="text" name="name"   placeholder="Name" value="{{$data->name}}">@error('name')<span style="color:red">{{$message}}</span>@enderror</td>
                                <td> <label for="email" class="">Address </label></td>
                                <td colspan="2"><input class="form-control" type="text" name="address"   placeholder="Address" value="{{$data->address}}">@error('address')<span style="color:red">{{$message}}</span>@enderror</td>
                                
                            </tr>

                            <tr>
                                <td> <label for="profile" class="">Company Bio </label></td>
                                <td colspan="5"><textarea  id="" cols="15" rows="2" name="company_bio" class="form-control" placeholder="Company bio" >{{$data->company_bio}}</textarea>@error('company_bio')<span style="color:red">{{$message}}</span>@enderror</td>
                                
                            </tr>

                            <tr>
                                <td> <label for="name" class="">Company Profile  First</label></td>
                               <td colspan="2"><textarea  id="" cols="15" rows="2" name="company_profile_one" class="form-control" placeholder="Company profile first" >{{$data->company_profile_one}}</textarea>@error('company_profile_one')<span style="color:red">{{$message}}</span>@enderror</td>
                                <td> <label for="email" class="">Company Profile Last </label></td>
                                <td colspan="2"><textarea  id="" cols="15" rows="2" name="company_profile_two" class="form-control" placeholder="Company profile last (If any)" >{{$data->company_profile_two}}</textarea>@error('company_profile_two')<span style="color:red">{{$message}}</span>@enderror</td>
                                
                            </tr>

                            
                            <tr>
                                <td> <label for="email" class="">Trade Licence </label></td>
                                <td colspan="2"><input class="form-control" type="file" name="trade_license"  aria-required="true">@error('trade_license')<span style="color:red">{{$message}}</span>@enderror</td>
                                <td> <label for="profile" class="">Logo </label></td>
                                <td colspan="2"><input class="form-control" type="file" name="logo"  aria-required="true"></textarea>@error('logo')<span style="color:red">{{$message}}</span>@enderror</td>
                                <td></td>

                            </tr>

                            <tr>
                                 <td> <label for="email" class="">Certificates </label></td>
                                	<!-- <input type="file" id="file" name="myfiles[]" multiple /> -->
                                <td colspan="2"><input class="form-control" type="file" name="certificates[]"  aria-required="true" multiple/>@error('certificates')<span style="color:red">{{$message}}</span>@enderror</td>
                                <td> <label for="profile" class="">Photo </label></td>
                               <td colspan="2"> <input class="form-control" type="file" name="photo"  aria-required="true">@error('photo')<span style="color:red">{{$message}}</span>@enderror</td>
                             
                            </tr>

                            <tr>
                                 
                                <td> <label for="profile" class="">Phone </label></td>
                                <td colspan="2"><input class="form-control" type="text" name="phone"  aria-required="true" placeholder="Phone" value="{{$data->phone}}">@error('phone')<span style="color:red">{{$message}}</span>@enderror</td>
                                <td> <label for="email" class="">E-mail </label></td>
                                	<!-- <input type="file" id="file" name="myfiles[]" multiple /> -->
                                <td colspan="2"><input class="form-control" type="email" name="email"  aria-required="true" placeholder="Email" value="{{$data->email}}">@error('email')<span style="color:red">{{$message}}</span>@enderror</td>
                                
                            </tr>
                            <tr>
                                <td> <label for="profile" class="">Map </label></td>
                                <td colspan="5"><textarea  id="" cols="15" rows="2" name="map" class="form-control" placeholder="Map" >{{$data->map}}</textarea>@error('map')<span style="color:red">{{$message}}</span>@enderror</td>

                            </tr>

                            <tr>
                                <td> <label for="email" class="">Machine Post Limits</label></td>
                                	<!-- <input type="file" id="file" name="myfiles[]" multiple /> -->
                                <td><input class="form-control" type="number" name="machine_post_limits"  aria-required="true" placeholder="Machine post limit" value="{{$data->machine_post_limits}}">@error('machine_post_limits')<span style="color:red">{{$message}}</span>@enderror</td>
                                <td> <label for="profile" class="">Work Post Limits </label></td>
                               <td> <input class="form-control" type="number" name="work_post_limits"  aria-required="true" placeholder="Work post limit" value="{{$data->work_post_limits}}">@error('work_post_limits')<span style="color:red">{{$message}}</span>@enderror</td>
                               <td> <label for="profile" class="">Status</label></td>
                               <!-- <td> <input type="radio" name="status" value="active">&nbsp;&nbsp;Active &nbsp; &nbsp; &nbsp;<input type="radio" name="status" value="inactive" checked>&nbsp;&nbsp;Inactive</td> -->
                               <td>
                                <select name="status" id="" class="form-control" >
                                    <option value="">Select Option</option>
                                    <option value="active" @if($data->status == 'active') {{'selected'}} @endif >Active</option>
                                    <option value="inactive" @if($data->status == 'inactive') {{'selected'}} @endif >Inactive</option>
                                    <option value="pending" @if($data->status == 'pending') {{'selected'}} @endif >Pending</option>
                               </select>
                               @error('status')<span style="color:red">{{$message}}</span>@enderror
                            </td>
                                
                            </tr>
                            <tr>
                            <!-- <td colspan="3"></td> -->
                            <td > <input type="reset" class="btn  btn-block btn-secondary waves-effect" value="Reset"></td>
                            <td colspan="2"><button class="btn btn-block btn-success waves-effect waves-light mr-1" type="submit">Save</button></td>
                              
                            </tr>

                        </table>
                    </form>
                </div>
                <!-- .form -->
            </div>
            <!-- card-body -->
        </div>
        <!-- card -->
    </div>
    <!-- col -->
</div>
                        <!-- End row -->

@endsection


 
                       