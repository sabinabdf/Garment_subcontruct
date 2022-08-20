@extends('admin/layout')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Machine Information</h3>
                <h4 style="color: red">{{session('status')}}</h4>
            </div>
            <div class="card-body">
                <form action="{{route('machine.update',$upData)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <table class="table table-bordered">
                        <tr>
                            <td>
                            Machine Name
                                <input type="text" class="form-control" id="name" name="name" value="{{$upData->name}}">
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
                                            if($upData->category_id==$cat->id){
                                                $selected="selected";
                                            }else{
                                                $selected="";
                                            }
                                        @endphp
                                            <option {{$selected}} value="{{$cat->id}}">{{$cat->name}}</option>
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
                            @php
                            $obj = json_decode($upData->specifications,true);
                            $inc=0;
                            foreach($obj as $key=>$value){
                            @endphp
                            <tr class="tr_{{$inc}}">
                                <td>
                                    Specifications Title
                                    <input class="form-control" id="specifications" value="{{$key}}" name="title[]">
                                </td>
                                <td>
                                    Specifications Body
                                    <input class="form-control" id="specifications" value="{{$value}}" name="body[]">
                                </td>
                                <td>
                                    <button class="btn btn-danger" id="removerow" value="tr_{{$inc}}">X</button>
                                </td>
                            </tr>
                            @php
                                $inc++;
                                }
                            @endphp
                        </tbody>
                        <tr>
                            <td>
                                Brand
                                <input type="text" class="form-control" id="brand" name="brand" value="{{$upData->brand}}">
                                @error('brand')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                Upload Image <br>
                                <img src="{{asset($upData->photo)}}" style="width:60px; border:1px solid #ddd; padding: 2px;">
                                <input type="file" name="photo" id="photo" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Update" class="btn btn-primary btn-block"></td>
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
        var sl=<?php echo $inc;?>;
        $(document).on('click','#addrow',function(e){
            e.preventDefault();
            var tr = '<tr class="tr_'+sl+'"> <td><input class="form-control" id="specifications" name="title[]"></td><td><input class="form-control" id="specifications" name="body[]"></td><td><button class="btn btn-danger" id="removerow" value="tr_'+sl+'">X</button></td> </tr>';
             $("#tbody").append(tr);
             sl++;
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