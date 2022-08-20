

@extends('front.layout')

@section('bennar')
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Profile Settings</h2>
            <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i> Machine Upload</p>
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
            <!-- <a href="{{route('deliveryman_list')}}" class="btn btn-primary"><i class=" fas fa-arrow-left"></i></a><br> -->
            <div class="col-md-9">





          
                <form action="{{route('update_seller_approval',$delivery_approval_id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <table class="table table-bordered">
                        <tr>

                            <td>
                            <label for="">Deal Title</label>
                                <input type="text" class="form-control"  value="{{$delivery_approval->deals->title}}"  disabled>
                                <input type="hidden" class="form-control" id="name" name="deal_id" value="{{$delivery_approval->deals->id}}"  >
                                @error('name')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                        
                        </tr>
                        <tr>
                            <td>
                               <label for="">Merchant Name</label> 
                            <input type="text" class="form-control"  value="{{$delivery_approval->marchant->name}}" disabled>
                            <input type="hidden" class="form-control" id="name" name="merchant_id" value="{{$delivery_approval->marchant->id}}" >
                                @error('phone')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="">Seller Name</label>
                            <input type="text" class="form-control" value="{{$delivery_approval->seller->name}}" disabled>
                            <input type="hidden" class="form-control" id="received_by" name="seller_id" value="{{$delivery_approval->seller->id}}" >
                                @error('photo')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><input type="hidden" name="merchant_approval" value="{{$delivery_approval->merchant_approval}}"></td>
                            <td><input type="hidden" name="seller_approval" value="{{$delivery_approval->seller_approval}}"></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Delivery Man Name</label>
                            <input type="text" class="form-control" value="{{$delivery_approval->deliveryman->name}}" disabled>
                            <input type="hidden" class="form-control" id="received_by" name="seller_id" value="{{$delivery_approval->seller->id}}" >
                                @error('photo')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Submit" class="btn btn-primary btn-block"></td>
                           
                        </tr>
                    </table>
                </form>
                <!-- .form -->


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