@extends('front.layout')

@section('bennar')
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Machine Upload</h2>
            <p><a href="{{route('dashboard')}}" title="User Dashboard">User Dashboard</a> <i class="ti-angle-double-right"></i> Machine Upload</p>
        </div>
    </div>
</div>

@endsection
@section('content')
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
            <h3>Upload your new machine</h3>    
            <div class="profile_detail_block">


                    <form action="{{route('saveUserMachine')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <td>Category</td>
                                <td colspan="2">
                                    <select name="category_id" id="" class="wide form-control">
                                        <option value="{{old('category_id')}}">Category Name</option>
                                        @foreach ($category as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </td>
                                <td>Macine</td>
                                <td colspan="2">
                                    <select name="machine_id" id="machine" class="wide form-control">
                                        <option value="">Macine Name</option>
                                        @foreach ($machine as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>

                                </td>
                            </tr>
                            <tr>
                                <td>Title</td>
                                <td colspan="2">
                                    <input type="text" name="title" class="form-control" value="{{old('title')}}"
                                        placeholder="Machine Title">
                                    @error('title')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </td>
                                <td>Photo</td>
                                <td colspan="2">
                                    <input type="file" name="photo" class=" form-control" value="{{old('photo')}}">
                                    @error('photo')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </td>

                            </tr>
                            <tr>
                                <td>Number of Machine</td>
                                <td>
                                    <input type="text" name="number_of_machine" class="form-control "
                                        value="{{old('number_of_machine')}}" placeholder="Total Machine">
                                    @error('number_of_machine')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </td>
                                <td>Number of Available</td>
                                <td colspan="2">
                                    <input type="text" name="number_of_available" class="form-control"
                                        value="{{old('number_of_available')}}" placeholder="Total Available">
                                    @error('number_of_available')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </td>
                               

                            </tr>
                            <tr>
                                <td colspan="5">Specification</td>
                            </tr>
                            <tr>
                               
                                <td colspan="5">

                                    <div class="col-xl-12 col-md-12" id="spacificTD">
                                        <div class="col-xl-5 col-md-5">
                                            <input type="text" id="key" name="key[]" class="form-control"
                                                placeholder="Name">
                                        </div>
                                        <div class="col-xl-5 col-md-5">
                                            <input type="text" id='value' name="value[]" class="form-control"
                                                placeholder="Details">
                                        </div>
                                        <div class="col-xl-2 col-md-2">
                                            <a class="btn btn-info" id="addMore">+</a>
                                            <a id="remove"></a>
                                        </div>


                                    </div>
                                    <div class="col-md-12 col-xl-12">
                                        <div class="row" id="new"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Purchase Date</td>
                                <td>
                                    <input type="date" name="purchase_date" class="form-control"
                                        value="{{old('purchase_date')}}">
                                    @error('purchase_date')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </td>
                                
                                <td>Brand</td>
                                <td colspan="2">
                                    <input type="text" name="brand" class="form-control" value="{{old('brand')}}"
                                        placeholder="Brand Name">
                                    @error('brand')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>

                                <td>Status</td>
                                <td>
                                    <select name="status" id="" class="wide form-control">

                                        <option value="available">Available</option>
                                        <option value="busy">Busy</option>
                                    </select>
                                    @error('status')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </td>

                                <td colspan="4"><input type="submit" class="btn btn-primary btn-block" value="Save">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('jquery')
<script>
    $(document).ready(function(){
        var sl =0;
        $(document).on('click','#addMore',function(){
            sl++
            // alert('ok')
            let div = "<div class='new_fild_"+sl+"'><hr><div class='col-xl-5 col-md-5'> <input type='text' class='form-control remove_"+sl+"' name='key[]' placeholder=' Name'></div><div class='col-xl-5 col-md-5'> <input type='text' class='form-control remove_"+sl+"' name='value[]' placeholder='Details'> </div><div col-xl-2 col-md-2><a class='btn btn-danger' value='"+sl+"' id='removeFild'>X</a></div><hr>"
           
            
            $('#new').append(div)
           
             
        });
       $(document).on('click','#removeFild',function(){
        // alert('ok')
        // console.log('ok')
               let test = $(this).attr('value')

               
                $('.new_fild_'+ test).remove()
             
       });
       $('#machine').on('change',function(){
        
           let machineId = this.value;
           $.ajax({
              type: 'get',
               url: "/getMachine/"+machineId,
              dataType: 'json',                   
             success: function(response){ 
                 
                let machineData = response.specifications
                let t = JSON.parse(machineData)
                    var s= sl;
                        let tr ='<div class="col-xl-12 col-md-12">';
                 $.each( t, function( key, value ) {
                     s++;
                        tr+="<div class='new_fild_"+s+"'>"
                        tr += '<div class="col-xl-6 col-md-5"><input type="text" name="key[]" class="form-control" value="'+key+'"></div>'
                        tr +='<div class="col-xl-6 col-md-5"><input type="text" name="value[]" class="form-control" value="'+value+'"></div>'
                        tr+="<div class='col-xl-2 col-md-2'><a class='btn btn-danger' value='"+s+"' id='removeFild'>X</a></div>"
                        tr+="</div>"
                    // $('#spacificTD').html()
                    // $('#key').attr('value',key)
                    //  $('#value').attr('value',value)
                    //  console.log(key )
                    
                    
                   });
                   tr+='<a class="btn btn-info" id="addMore">+</a></div>';
                   $('#spacificTD').html(tr)
               },
    
      });
        
       })
     
    })
</script>

@endsection