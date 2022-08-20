@extends('front.layout')
@section('bennar')
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Update Macine</h2>
            <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i>Update Macine</p>
        </div>
    </div>
</div>

@endsection
@section('content')
<section class="padd-top-80 padd-bot-80">
    <div class="container">
        <h1>Update Machine</h1>
        <form action="{{route('updateUserMachine',$userMachine->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <table class="table table-bordered">
                <tr>

                    <td>Category</td>
                    <td colspan="2">
                        <select name="category_id" id="" class="wide form-control">
                            <option value="{{$userMachine->category->id}}">{{$userMachine->category->name}}</option>
                            @foreach ($category as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>

                    </td>
                    <td>Macine</td>
                    <td colspan="2">
                        <select name="machine_id" id="machine" class="wide form-control">
                            <option value="{{$userMachine->machine->id}}">{{$userMachine->machine->name}}</option>
                            @foreach ($machine as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>

                    </td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td colspan="2">
                        <input type="text" name="title" class="form-control" value="{{$userMachine->title}}">

                    </td>
                    <td>Photo</td>
                    <td colspan="2">
                        <img src="{{url('uploads/'.$userMachine->photo)}}" alt="" style="width: 25%">

                        <input type="file" name="photo" class=" form-control">

                    </td>

                </tr>
                <tr>
                    <td>Number of Machine</td>
                    <td>
                        <input type="text" name="number_of_machine" class="form-control "
                            value="{{$userMachine->number_of_machine}}">

                    </td>
                    <td>Number of Available</td>
                    <td colspan="2">
                        <input type="text" name="number_of_available" class="form-control"
                            value="{{$userMachine->number_of_available}}">

                    </td>

                </tr>
                <tr>
                    <td colspan="5">Specification</td>
                </tr>
                <tr>
                    <td colspan="5">
                        @php

                        $sData= json_decode($userMachine->specifications);
                        $sl=0;

                        @endphp
                        @foreach ($sData as $key=> $value)
                        <?php $sl++; ?>
                        {{-- <div class="col-xl-12 col-md-12" id="spacificTD" class="'new_fild_{{$sl}}">


                            <div class="col-xl-5 col-md-5">
                                <input type="text" id="key" name="key[]" class="form-control" placeholder="Name"
                                    value="{{$key}}">
                            </div>
                            <div class="col-xl-5 col-md-5">
                                <input type="text" id='value' name="value[]" class="form-control" placeholder="Details"
                                    value="{{$value}}">
                            </div>

                            <div class="col-xl-2 col-md-2">
                                <a class="btn btn-info" id="addMore">+</a>

                                <a class='btn btn-danger' value='{{$sl}}' id='removeFild'>X</a>

                            </div>
                            <div class="col-md-12 col-xl-12">
                                <div class="row new" id=""></div>
                            </div>

                        </div> --}}
                        <div class='new_fild_{{$sl}}'>
                            <hr>
                            <div class='col-xl-5 col-md-5'>
                                <input type='text' class='form-control remove_{{$sl}}' name='key[]' value='{{$key}}'>
                            </div>
                            <div class='col-xl-5 col-md-5'>
                                <input type='text' class='form-control remove_{{$sl}}' name='value[]'
                                    value='{{$value}}'>
                            </div>
                            <div col-xl-2 col-md-2>
                                <a class="btn btn-info addMore" id="">+</a>
                                <a class='btn btn-danger' value='{{$sl}}' id='removeFild'>X</a>
                            </div>

                            <hr>
                        </div>

                        @endforeach
                        <div class="col-md-12 col-xl-12">
                            <div class="row new" id=""></div>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td>Purchase Date</td>
                    <td>
                        <input type="date" name="purchase_date" class="form-control"
                            value="{{$userMachine->purchase_date}}">

                    </td>

                    <td>Brand</td>
                    <td colspan="2">
                        <input type="text" name="brand" class="form-control" value="{{$userMachine->brand}}">

                    </td>
                </tr>
                <tr>

                    <td>Status</td>
                    <td>
                        <select name="status" id="" class="wide form-control">
                            <option value="{{$userMachine->status}}">{{$userMachine->status}}</option>
                            <option value="available">Available</option>
                            <option value="busy">Busy</option>
                        </select>

                    </td>

                    <td colspan="4"><input type="submit" class="btn btn-primary btn-block" value="Save"></td>
                </tr>
            </table>
        </form>
    </div>
</section>
@endsection
@section('jquery')
<script>
    $(document).ready(function() {
        let sl = <?php echo $sl; ?>;
        $('.addMore').on('click',function(){
            console.log('ok')
            sl++
            // alert('ok')
            let div = "<div class='new_fild_"+sl+"'><hr><div class='col-xl-5 col-md-5'> <input type='text' class='form-control remove_"+sl+"' name='key[]' placeholder=' Name'></div><div class='col-xl-5 col-md-5'> <input type='text' class='form-control remove_"+sl+"' name='value[]' placeholder='Details'> </div><div col-xl-2 col-md-2><a class='btn btn-danger' value='"+sl+"' id='removeFild'>X</a></div><hr></div>"
        


        $('.new').append(div)


    });
    $(document).on('click', '#removeFild', function() {
        // alert('ok')
        // console.log('ok')
        let test = $(this).attr('value')


        $('.new_fild_' + test).remove()

    });
    $('#machine').on('change', function() {
    let machineId = this.value;
    $.ajax({
        type: 'get'
        , url: "/getMachine/" + machineId
        , dataType: 'json'
        , success: function(response) {

            let machineData = response.specifications
            let t = JSON.parse(machineData)

            $.each(t, function(key, value) {
                $('#key').attr('value', key)
                $('#value').attr('value', value)
                // console.log(key + ": " + value);

            });

        }

    })

    })

    })
    

</script>

@endsection