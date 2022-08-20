@extends('admin/layout')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  
<br><br><br><br>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Companies List</h3>
            </div>
            <div class="card-body">
            @if(Session::has('status'))
				<div class="alert alert-success" role="alert">
				  {{ Session::get('status')}}
				</div>
				@endif

                @if(Session::has('delete'))
				<div class="alert alert-danger" role="alert">
				  {{ Session::get('delete')}}
				</div>
				@endif
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th> Name</th>

                                        <th> Address</th>
                                        <th> Phone</th>
                                        <th> Machine Post Limits</th>
                                        <th> Work Post Limits</th>
                                        <th> Status</th>
                                        <th colspan="2" style="justify-content: center;">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        @if($data)
                                        @foreach ($data as $k=>$l)
                                    <tr>
                                        <td>{{++$k}}</td>

                                        <td>{{$l->name}}</td>
                                        <td>{{$l->address}}</td>
                                        <td>{{$l->phone}}</td>
                                        <td>{{$l->machine_post_limits}}</td>
                                        <td>{{$l->work_post_limits}}</td>

                                        <td>



                                        @if($l->status == "pending")
                                        <a href="{{route('pending_company',$l->id)}}"
                                                class="btn btn-primary btn-xs">Activate</a>
                                        @endif
                                            <form action="" method="post"  id="frm">
                                        <input type="text" name="id" value = "{{$l->id}}" id="id_no">
                                            <select name="status" id="select_id">
                                                <option value="" class="form-control">Select Option</option>
                                                <option value="active" <?php if($l->status == 'active'){ echo
                                                    "selected";} ?>>Active</option>
                                                <option value="inactive" <?php if($l->status == 'inactive'){ echo
                                                    "selected";} ?>>Inactive</option>
                                                <option value="pending" <?php if($l->status == 'pending'){ echo
                                                    "selected";} ?>>Pending</option>
                                            </select>
                                            </form>
                                        </td>



                                        <td>
                                        <a href="{{route('add_userAdmin',$l->id)}}" class="btn btn-primary btn-sm">Add User</a>
                                     </td>

                                        <td>
                                            <a href="{{route('companies.edit',$l->id)}}"
                                                class="btn btn-primary btn-xs"><i class="fas fa-edit" title="Edit"></i></a>
                                            <a href="{{route('companies.show',$l)}}"
                                                class="btn btn-info btn-xs"><i class=" fas fa-eye" title="View"></i></a>
                                            <form action="{{route('companies.destroy',$l->id)}}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-xs"
                                                    onclick="return confirm('Are You Sure???')" title="Delete"> <i
                                                        class=" fas fa-trash-alt"></i> </button>
                                            </form>
                                            <a href="{{route('machineListInd',$l->id)}}"
                                                class="btn btn-success btn-xs" title="Machine List"><i class=" fas fa-list"></i></a>

                                        </td>

                                    </tr>

                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
     $(document).ready(function(){
             
             
                //         $('#select_id').on('change', function()
                // {

                //     var status = $(this).val();

                //     var id = $('#id_no').val();
                //     alert(status + id);
                //     // alert(id); //or alert($(this).val());
                //     // console.log("===== " + status + " =====");

                // });

                jQuery('#select_id').on('change', function()
                {
                    alert('ok');
                    jQuery('#frm').submit(function(e){
                        e.preventDefault();
                        alert('ok');
                    });
                });
  




});

$.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url : "{{ url('saveToken') }}",
        data : {stato : status},
        type : 'POST',
        dataType : 'json',
        success : function(result){

            alert(data)
            console.log("===== " + result + " =====");

        }
    });
</script>
@endsection