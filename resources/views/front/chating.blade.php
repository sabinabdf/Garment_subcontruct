@extends('front.layout')

@section('style')
<style>
    .body {
        margin: 0 auto;
        max-width: 800px;
        padding: 0 20px;
        background-color: lightgreen
    }

    .c {
        border: 2px solid #dedede;
        background-color: #f1f1f1;
        border-radius: 5px;
        padding: 10px;
        margin: 10px 0;
    }

    .darker {
        border-color: rgb(185, 148, 148);
        background-color: #ddd;
    }

    .c::after {
        content: "";
        clear: both;
        display: table;
    }

    .c img {
        float: left;
        max-width: 60px;
        width: 100%;
        margin-right: 20px;
        border-radius: 50%;
    }

    .c img.right {
        float: right;
        margin-left: 20px;
        margin-right: 0;
    }

    .time-right {
        float: right;
        color: #aaa;
    }

    .time-left {
        float: left;
        color: #999;
    }

    .messageBody {
        height: 450px;
        overflow: scroll;
        scroll-behavior: smooth;

    }

 

</style>

@endsection
@section('content')
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            <h2>Chat with Partner</h2>
            <p><a href="#" title="Home">User Dashboard</a> <i class="ti-angle-double-right"></i>Chat with Partner</p>
        </div>
    </div>
</div>
<!-- ================ Profile Settings ======================= -->
<section class="padd-top-10 padd-bot-80">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div id="leftcol_item">
                    <div class="user_dashboard_pic"> <img alt="user photo" src="{{asset('photos/profile/'.$data->photo)}}"> <span class="user-photo-action">{{
                            Auth::user()->name }}</span> </div>
                </div>
                @include('front.dashSidebar')

            </div>

            <div class="col-md-8 col-xl-6" style="margin-top: 15px;margin-bottom: 50px">

            <a href="{{route('deal_list')}}" class="btn btn-md " style="width:10%;background:#548CA8;color:white;"><i class="fas fa-arrow-left" style="color:white"></i>&nbsp;&nbsp;Back</a>
            <br><br><br>    
            {{-- <div class="row">
                    <h5><i>{{$deals->marchant->name}}</i> || <i style="color: blue">chating with </i>
                ||<i>{{$deals->seller->name}}</i></h5>
                <table>


                    @if ($chatingData!='')
                    @foreach ($chatingData as $c)
                    @if ($data->id == $c->user_id )
                    <tr>
                        <td>Me :- {{$c->message}}</td>
                    </tr>
                    @elseif($data->id == $c->user_id)
                    <td>Me :- {{$c->message}}</td>
                    @endif






                    @endforeach
                    @endif
                    <td>
                        <div class="message"></div>
                    </td>


                    @if ($chatingData!='')
                    @foreach ($chatingData as $c)
                    @if ($data->id != $c->user_id )
                    <tr>
                        <td>other :- {{$c->message}}</td>
                    </tr>
                    @elseif($data->id != $c->user_id)
                    <td>other :- {{$c->message}}</td>
                    @endif

                    @endforeach
                    @endif

                    <tfoot>
                        <tr>
                            <td><input type="text" id="message" class="form-control" placeholder="Your Message">
                            </td>
                            <td><button id="send" class="btn btn-info">Send</button></td>
                        </tr>
                    </tfoot>
                </table>


                <div style="height: 80%; width:100%; overflow:hidden; ">

                </div>


            </div> --}}

            <div class="body">
                <h5><i>{{$deals->marchant->name}}</i> || <i style="color: blue">chating with </i> || <i>{{$deals->seller->name}}</i></h5>
                <div class="messageBody">
                    @foreach ($chatingData as $chat)
                      @if ($chat->user->company_id==$data->company_id)
                      <div class="c">
                        <img src="{{url('chat.png')}}" alt="Avatar" style="width:100%;">
                        <p>{{$chat->message}}</p>
                        <span class="time-right">{{$chat->created_at}}</span>
                    </div>
                    @else
                      <div class="c darker">
                        <img src="{{url('chat1.png')}}" alt="Avatar" class="right" style="width:100%;">
                        <p>{{$chat->message}}</p>
                        <span class="time-left">{{$chat->created_at}}</span>
                    </div>
                      @endif  
                    @endforeach
                    

                    

                </div>
                <div class="input col-md-12 col-xl-12">
                    <div class="col-md-10 col-xl-10">
                       <div class="row">
                       <textarea name="" id="message" cols="15" rows="3" class="form-control" placeholder="Your Message"></textarea>
                       </div>
                    </div>
                    <div class="col-md-2 col-xl-2">
                        <div class="row">
                            <label for=""><input type="button" class="btn btn-info" value="Send" id="send"></label>
                        </div>
                    </div>
                    
                    
                </div>

            </div>

        </div>

    </div>

    </div>


</section>
<!-- ================ End Profile Settings ======================= -->
@endsection
@section('jquery')
<script>
    $(document).ready(function() {
       
        $('#send').on('click', function() {
            location.reload();
            // console.log('ok');
            var sellerID = "{{$deals->seller_id}}"
            var merchantID = "{{$deals->merchant_id}}"
            var dealId = "{{$deals->id}}"
            var message = $('#message').val()
           
            $.ajax({
                type: 'post',
                 url: '/sendMessage',
                 dataType: 'json',
                 data: {
                    '_token': "{{ csrf_token() }}",
                     'deal_id': dealId,
                     'merchant_id': merchantID,
                     'seller_id': sellerID,
                     'message': message
                },
                success: function(respone) {
                    console.log(respone)
                }

            })
        })
    })

</script>

@endsection
