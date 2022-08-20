@extends('admin/layout')

@section('content')
<br><br><br><br>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12 col-xl-12">
                    <div class="row">
                        <div class="col-md-4">
                 
                            <img src="{{url('uploads/'. $user->photo)}}" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <h5>Details</h5>
                            <table class="table">
                                <tr>
                                    <td>Name</td>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $user->email}}</td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>{{ $user->phone}}</td>
                                </tr>
                                <tr>
                                    <td>Company Name</td>
                                    <td>@if($user->is_admin == 'user'){{ $user->company->name}}else{{'Admin'}} @endif</td>
                                </tr>
                                

                                <tr>
                                    <td>Designation</td>
                                    <td>{{ $user->designation}}</td>
                                </tr>
                                <tr>
                                    <td>Photo</td>
                                    <td>{{ $user->photo}}</td>
                                </tr>

                                <tr>
                                    <td>Role</td>
                                    <td>{{ $user->is_admin}}</td>
                                </tr>
                            </table>
        
                        </div>
                    </div>
                </div>
               
            </div>
            
        </div>
    </div>
</div>
</div>

@endsection

