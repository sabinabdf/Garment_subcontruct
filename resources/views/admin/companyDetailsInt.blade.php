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
                 
                            <img src="{{url('uploads/'.$company->photo)}}" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <h5>Details</h5>
                            <table class="table">
                                <tr>
                                    <td>Name</td>
                                    <td>{{$company->name}}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>{{$company->address}}</td>
                                </tr>
                                <tr>
                                    <td>Company Bio</td>
                                    <td>{{$company->company_bio}}</td>
                                </tr>
                                <tr>
                                    <td>Company Profile First</td>
                                    <td>{{$company->company_profile_one}}</td>
                                </tr>

                                <tr>
                                    <td>Company Profile Last</td>
                                    <td>{{$company->company_profile_two}}</td>
                                </tr>
                                <tr>
                                    <td>Trade License</td>
                                    <td>{{$company->trade_license}}</td>
                                </tr>

                                <tr>
                                    <td>Logo</td>
                                    <td>{{$company->logo}}</td>
                                </tr>
                            </table>
        
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-12">
                    <h4>Spacifications</h4><hr>
                    <table class="table">
                        @php
                        $data = json_decode($company->certificates);
                        @endphp
                        @foreach ( $data as $key=>$value)
                        <tr>
                            <td>{{$key}}</td>
                            <td>{{$value}}</td>
                        </tr>
                        @endforeach
                    </table>
        
                </div>
                <div class="col-md-12 col-xl-12">
                    <h4>More Details</h4><hr>
                    <table class="table">
                        <tr>
                            <td>Phone</td>
                            <td>{{$company->phone}}</td>
                        </tr>
                        <tr>
                            <td>Map</td>
                            <td>{{$company->map}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{$company->email}}</td>
                        </tr>
                        <tr>
                            <td>Photo</td>
                            <td>{{$company->photo}}</td>
                        </tr>

                        <tr>
                            <td>Machine Post Limit</td>
                            <td>{{$company->machine_post_limits}}</td>
                        </tr>
                        <tr>
                            <td>Work Post Limit</td>
                            <td>{{$company->work_post_limits}}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>{{$company->status}}</td>
                        </tr>
        
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>
</div>

@endsection

