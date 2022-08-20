@extends('admin/layout')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  
<br><br><br><br>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">User List</h3>
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

                                        <th> Email</th>
                                        <th> Phone</th>
                                        <th> Photo</th>
                                        <th>Designation</th>
                                        <th  style="justify-content: center;">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        @if($data)
                                        @foreach ($data as $k=>$l)
                                    <tr>
                                        <td>{{++$k}}</td>

                                        <td>{{$l->name}}</td>
                                        <td>{{$l->email}}</td>
                                        <td>{{$l->phone}}</td>
                                        <td>{{$l->photo}}</td>
                                        <td>{{$l->designation}}</td>

                                        <td>
                                            <a href="{{route('user_edit',$l->id)}}"
                                                class="btn btn-primary btn-xs" title="Edit"><i class="fas fa-edit"></i></a>
                                            <a href="{{route('user_detail',$l->id)}}"
                                                class="btn btn-info btn-xs" title="View"> <i class=" fas fa-eye"></i></a>
                                            <form action="{{route('user_delete',$l->id)}}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-xs"
                                                    onclick="return confirm('Are You Sure???')" title="Delete"> <i
                                                        class=" fas fa-trash-alt"></i> </button>
                                            </form>
                                           
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