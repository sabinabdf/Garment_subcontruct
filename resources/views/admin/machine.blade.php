@extends('admin/layout')

@section('content')

<br><br><br><br>
<div class="row">
    <!-- Basic example -->
    <div class="col-xl-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> Add Category</h3></div>
            <div class="card-body">
                <form action="{{route('save_cat')}}" method="post">
                    @csrf
                    <table class="table">

                        <tr>
                            <td><label for="exampleInputName1">Name</label></td>
                            <td><input name="name" type="text" class="form-control" id="exampleInputName1" placeholder=" Enter the catergory name"></td>
                            <td> <label for="exampleInputName1">Category</label></td>
                            <td>
                                    <select name="category" id="" class="form-control">
                                        <option value="">Select Option</option>
                                        @foreach($data as $d)
                                        <option value="{{$d->id}}">{{$d->name}}</option>
                                        @endforeach
                                     </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="exampleInputName1">Specifications</label><span class="btn btn-xs btn-primary" id="btn">+</span></td>
                            <td >Title: <input type="text" class="form-control" placeholder=" Enter the title"> </td>
                            <td colspan="2">Details: <input type="text" class="form-control" placeholder=" Enter the details"> </td>
                            
                        </tr>
                        <tbody id="ado"></tbody>
                       
                        <tr>
                            <td><label for="exampleInputName1">Brand</label></td>
                            <td><input type="text" class="form-control" name="brand" placeholder=" Enter the brand"> </td>
                            <td><label for="exampleInputName1">Photo</label></td>
                            <td><input type="file" class="form-control" name="brand"></td>
                        </tr>
                    </table>
                   
                    
    
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                </form>
            </div>
            <!-- card-body -->
        </div>
        <!-- card -->
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('#btn').on('click',function(){
        // $('#btn').click(function(){
            console.log('ok');
            // alert('Sabas beta!');
            $('#ado').append("<tr ><td><label for='exampleInputName1'>Specifications</label></td><td >Title: <input type='text' class='form-control' placeholder='Enter the title'> </td><td colspan='2'>Details: <input type='text' class='form-control' placeholder=' Enter the details'> </td> </tr>")
        });
    });
</script>
@endsection