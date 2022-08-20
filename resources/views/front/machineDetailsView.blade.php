@extends('front.layout')

@section('bennar')
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Profile Settings</h2>
            <p><a href="#" title="Home">Dashboard</a> <i class="ti-angle-double-right"></i> Machine List</p>
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
                    <div class="user_dashboard_pic"> <img alt="user photo"
                            src="{{asset('photos/profile/'.$data->photo)}}"> <span class="user-photo-action"> {{
                            Auth::user()->name }}</span> </div>
                </div>
                @include('front.dashSidebar')
            </div>
            <div class="col-md-9">
                <div class="profile_detail_block">
                    <div class="col-md-12 col-xl-12">

                        <div class="row">


                            <div class="col-md-4">
                                <a href="{{route('getUserMachine')}}"><i class="fa-solid fa-arrow-left"></i></a>
                                <img src="{{url('uploads/'.$userMachine->photo)}}" alt="" class="img-responsive">
                            </div>
                            <div class="col-md-8">
                                <h5>Details</h5>
                                <table class="table">
                                    <tr>
                                        <td>Name</td>
                                        <td>{{$userMachine->title}}</td>
                                    </tr>
                                    <tr>
                                        <td>Category</td>
                                        <td>{{$userMachine->category->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Machine</td>
                                        <td>{{$userMachine->machine->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Total Machine</td>
                                        <td>{{$userMachine->number_of_machine}}</td>
                                    </tr>
                                    <tr>
                                        <td>Total Available</td>
                                        <td>{{$userMachine->number_of_available}}</td>
                                    </tr>
                                </table>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-12">
                        <h4>Spacifications</h4>
                        <hr>
                        <table class="table">
                            @php
                            $data = json_decode($userMachine->specifications);
                            @endphp
                            @foreach ( $data as $key=>$value)
                            <tr>
                                <td>{{$key}}</td>
                                <td>{{$value}}</td>
                            </tr>
                            @endforeach
                        </table>

                    </div>
                    <div class="col-md-12">
                        <h4>More Details</h4>
                        <hr>
                        <table class="table">
                            <tr>
                                <td>Brand</td>
                                <td>{{$userMachine->brand}}</td>
                            </tr>
                            <tr>
                                <td>Purchase Date</td>
                                <td>{{$userMachine->purchase_date}}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>{{$userMachine->status}}</td>
                            </tr>

                        </table>
                    </div>

                </div>
            </div>
        </div>
</section>


@endsection