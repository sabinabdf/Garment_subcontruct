@extends('admin/layout')

@section('content')
<br><br><br><br>
<div class="row">
    <!-- Basic example -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> Add Category</h3></div>
            <div class="card-body">
                <form action="{{route('save_cat')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder=" Enter the catergory name">
                    </div>
    
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                </form>
            </div>
            <!-- card-body -->
        </div>
        <!-- card -->
    </div>
</div>


@endsection