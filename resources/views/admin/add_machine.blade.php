@extends('admin/layout')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add User Machine</h3>
                <h4 style="color: red">{{session('status')}}</h4>
            </div>
            <div class="card-body">
                <form action="{{route('machine.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <td>
                            Machine Name
                                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                                @error('name')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>Select Category
                                <select class="form-control" id="category_id" name="category_id">
                                        <option value="">Select Category</option>
                                        @php
                                        $calList = DB::table('categories')->get();
                                        foreach ($calList as $cat){
                                        @endphp
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @php
                                        }
                                        @endphp
                                    </select>
                                @error('category_id')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                <button class="btn btn-primary" id="addrow">+</button>
                            </td>
                        </tr>
                        <tbody id="tbody">
                            <tr class="tr_0">
                                <td>
                                    Specifications Title
                                    <input class="form-control" id="specifications" name="title[]">
                                </td>
                                <td>
                                    Specifications Body
                                    <input class="form-control" id="specifications" name="body[]">
                                </td>
                                <td>
                                    <button class="btn btn-danger" id="removerow" value="tr_0">X</button>
                                </td>
                            </tr>
                        </tbody>
                        <tr>
                            <td>
                                Brand
                                <input type="text" class="form-control" id="brand" name="brand" value="{{old('brand')}}">
                                @error('brand')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                Upload Image
                                <input type="file" name="photo" id="photo" class="form-control">
                                @error('photo')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Submit" class="btn btn-primary btn-block"></td>
                            <td></td>
                        </tr>
                    </table>
                </form>
                <!-- .form -->
            </div>
            <!-- card-body -->
        </div>
        <!-- card -->
    </div>
    <!-- col -->
</div>
                   <!-- End row -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
        var sl=0;
        $(document).on('click','#addrow',function(e){
            sl++;
            e.preventDefault();
            var tr = '<tr class="tr_'+sl+'"> <td><input class="form-control" id="specifications" name="title[]"></td><td><input class="form-control" id="specifications" name="body[]"></td><td><button class="btn btn-danger" id="removerow" value="tr_'+sl+'">X</button></td> </tr>';
             $("#tbody").append(tr);
        });
    })
    $(document).ready(function(){
        $(document).on('click','#removerow',function(e){
            e.preventDefault();
            var trClass = '.'+this.value;
            if (trClass == '.tr_0') {
                alert("Please Don't Remove This Row");
            }else{
                $(trClass).remove();
            }
        });
    })
</script>
@endsection