@extends('front.layout')
@section('content')
<!-- ======================= Page Title ===================== -->
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Proposal List</h2>
            <p><a href="{{route('dashboard')}}" title="User Dashboard">User Dashboard</a> <i class="ti-angle-double-right"></i> Proposal List</p>
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
                @include('front.dashSidebar')
            </div>
            <div class="col-md-9">
            <a href="{{route('dashboard')}}" class="btn btn-md " style="width:12%;background:#548CA8;color:white;"><i class="fas fa-arrow-left" style="color:white"></i>&nbsp;&nbsp;Back</a>
            <h3></h3>
                <div class="profile_detail_block">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Company Name</th>
                                <th>Budget</th>
                                <th>Deadline</th>
                                <th>Status</th>
                                <th>#</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($proposal as $key=>$item)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->workorder->Companies->name}}</td>
                                {{-- <td>{{$item->machinePost->usermachines->company->name}}</td> --}}
                                <td>{{$item->budget}}</td>
                                <td>{{$item->deadline}}</td>
                                <td>{{$item->status}}</td>
                                <td>
                                    <a href="{{route('think_proposal',$item->id)}}" class="btn btn-info btn-sm">Show Proposal</a>
                                </td>
                                <td>
                                    <a href="{{route('editProposal',$item->id)}}" class="btn btn-info btn-sm"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="{{route('deleteProposal',$item->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('are you sure!!')"><i
                                                class="fa-solid fa-trash"></i></button>

                                    </form>
                                    {{-- <a href="" class="btn btn-danger btn-sm"
                                        onclick="return confirm('are you sure!!')"><i class="fa-solid fa-trash"></i></a>
                                    --}}
                                    <a href="{{route('proposal_details',$item->id)}}" class="btn btn-success btn-sm"><i
                                            class="fa-solid fa-bars"></i></a>

                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ End Profile Settings ======================= -->
@endsection