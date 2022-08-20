@extends('admin/layout')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update User Machine </h3>
                <h4 style="color: red">{{session('status')}}</h4>
            </div>
            <div class="card-body">
                <form action="{{route('usermachine.update',$usermachine)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <table class="table table-bordered">
                        <tr>
                                 <td>
                                        <label for="">Company Name</label>
                                        <input type="text" class="form-control" id="specifications"  value="{{$usermachine->company->name}}">
                                        <input type="text" class="form-control" id="specifications" name="company_id" value="{{$usermachine->company_id}}">
                                        @error('company_id')
                                    <span style="color:red">{{$message}}</span>
                                    @enderror
                                    </td>

                                    <td>
                                        <label for="">Category Name</label>
                                        <input type="text" class="form-control" id="specifications"  value="{{$usermachine->category->name}}">
                                        <input type="text" class="form-control" id="specifications" name="category_id" value="{{$usermachine->category_id}}">
                                        @error('category_id')
                                    <span style="color:red">{{$message}}</span>
                                    @enderror
                                </td>
                           
                        </tr>

                        <tr>
                                <td>
                                        <label for="">Machine Name</label>
                                        <input type="text" class="form-control" id="specifications"  value="{{$usermachine->machine->name}}">
                                        <input type="text" class="form-control" id="specifications" name="machine_id" value="{{$usermachine->machine_id}}">
                                        @error('machine_id')
                                    <span style="color:red">{{$message}}</span>
                                    @enderror
                                </td>
                                <td>
                                <label for="">Title</label>
                                    <input type="text" class="form-control" id="specifications" name="title_one" value="{{$usermachine->title}}">
                                
                                    @error('title_one')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                                </td>


                                    
                        </tr>

                        <tr>
                        
                                <td>Select Category
                                     <select class="form-control" id="category_id" name="category_id">
                                                <option value="">Select Category</option>
                                                   @php
                                                $calList = DB::table('categories')->get();
                                                foreach ($calList as $cat){
                                                    if($usermachine->category_id==$cat->id){
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
                                <td>
                                
                             
                        </tr>
                       
                        <tbody id="tbody">
                            @php
                            $obj = json_decode($usermachine->specifications,true);
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
                                <label for="">Purchase Date</label>
                                <input type="text" class="form-control" id="brand" name="purchase_date" value="{{$usermachine->purchase_date}}">
                                @error('brand')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>

                            <td>
                                Upload Image <br>
                                <img src="{{asset($usermachine->photo)}}" style="width:60px; border:1px solid #ddd; padding: 2px;">
                                <input type="file" name="photo" id="photo" class="form-control">
                                @error('photo')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>

                           
                        </tr>
                        <tr>

                        
                        </tr>

                        <tr>
                            <td>
                                <label for="">Number of Machine</label>
                                <input type="text" class="form-control" id="brand" name="number_of_machine" value="{{$usermachine->number_of_machine}}">
                                @error('brand')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>

                            <td>
                                <label for="">Number of Available</label>
                                <input type="text" class="form-control" id="brand" name="number_of_available" value="{{$usermachine->number_of_available}}">
                                @error('brand')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>

                        

                        <tr>
                            <td>
                                Brand
                                <input type="text" class="form-control" id="brand" name="brand" value="{{$usermachine->brand}}">
                                @error('brand')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>

                            <td>

                                  <label for="">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="available" @if($usermachine->status == 'available') {{'selected'}} @endif >Available</option>
                                    <option value="busy" @if($usermachine->status == 'busy') {{'selected'}} @endif >Busy</option>
                                </select>

                                @error('status')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                           
                        </tr>
                        <tr>
                            <td>
                                <label for="">Approved</label>
                                <select name="approved" id="" class="form-control">
                                    <option value="yes" @if($usermachine->approved == 'yes') {{'selected'}} @endif >Yes</option>
                                    <option value="no" @if($usermachine->approved == 'no') {{'selected'}} @endif >No</option>
                                </select>
                               
                                @error('approved')
                                <span style="color:red">{{$message}}</span>
                                @enderror
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