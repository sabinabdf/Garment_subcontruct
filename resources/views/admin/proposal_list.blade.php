@extends('admin/layout')

@section('content')
<br><br>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Proposal List</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Company Name</th>
                                    <th>Title</th>
                                    <th>Budget</th>
                                    <th>Deadline</th>
                                    <th>Quantity</th>
                                    <th>Quality</th>
                                    <th>status</th>
                                    <th>Take Up</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
        @php
            $sl=0;
        @endphp
        @foreach ($proposalList as $key => $value)
            <!-- @php
            $userId = $value->user_id;
            $companyId = $value->user->company_id;

            $workOrderPostCompanyId = $value->workorder->company_id;
            @endphp
            @if($companyId == $workOrderPostCompanyId) -->
            <tr>
                <td>{{++$sl}}</td>
                <td>{{$value->workorder->Companies->name}}</td>
                <td>{{$value->title}}</td>
                <td>{{$value->budget}}</td>
                <td>{{$value->deadline}}</td>
                <td>{{$value->quantity}}</td>
                <td>{{$value->quality_related}}</td>
                <td><button class="btn btn-primary">{{$value->status}}</button></td>
                <td>
                    <input type="hidden" id="proposal_id" value="{{$value->id}}">
                    @if($value->take_up =='Pending')
                    <button class="btn btn-info" id="take-up" value="Pending">Pending</button>
                    @elseif($value->take_up =='Accept')
                    <button class="btn btn-info" id="take-up" value="Accept">Accept</button>
                    @elseif($value->take_up =='Rejected')
                    <button class="btn btn-info" id="take-up" value="Rejected">Rejected</button>
                    @endif
                </td>
                <td><a href="{{route('admin/proposal_details',$value->id)}}" class="btn btn-info btn-xs"><i class="far fa-eye"></i></a></td>
            </tr>
                
            <!-- @endif -->
        @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- End row -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $(document).on('click','#take-up',function(){
            var id = $('#proposal_id').val();
            $.ajax({
                type:'put',
                url:'/admin/accept_proposal/'+id,
                dataType:'json',
                data:{
                    _token:"{{ csrf_token() }}",

                },
                success:function(res) {
                    $('#take-up').html(res.success);
                },
                error:function(err) {
                    console.log(err);
                }
            });
        });
    });
</script>
@endsection