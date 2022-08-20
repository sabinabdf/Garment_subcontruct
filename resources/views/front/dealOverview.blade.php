@extends('front.layout')
@section('content')
<div class="page-title">
    <div class="container">
        <div class="page-caption">
            {{-- <h2>Add new Order</h2> --}}
            <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i>Deals List</p>
        </div>
    </div>
</div>
<!-- ================ Profile Settings ======================= -->
<section class="padd-top-10 padd-bot-80">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div id="leftcol_item">
                    <div class="user_dashboard_pic"> <img alt="user photo" src="{{asset('photos/profile/'.$data->photo)}}"> <span class="user-photo-action">{{ Auth::user()->name }}</span> </div>
                </div>
                @include('front.dashSidebar')

            </div>



            <div class="col-md-9 col-xl-9">
                <a href="{{route('deal_list')}}" class="btn btn-info" style="color: red"><i class=" fas fa-arrow-left"></i></a>
                <input type="button" onclick="printableDiv('printableArea')" value="Print" class="btn btn-success" />
                <div id="printableArea">
                   
                    <div class="row">



                        <div class="col-md-5 col-xl-5">
                            <h3>Machant</h3>
                            <strong> Company Name : {{$deals->marchant->name}}</strong><br>
                            <strong> Email : {{$deals->marchant->email}}</strong><br>
                            <strong> Address : {{$deals->marchant->address}}</strong><br>

                        </div>
                        <div class="col-md-2 col-xl-2">
                            {{-- <img src="{{url('admin_assets/images/deal.jpg')}}" alt="" class="img-responsive" style="width: 80%"> --}}
                        </div>
                        <div class="col-md-5 col-xl-5">
                            <h3>Seller</h3>
                            <strong> Company Name : {{$deals->seller->name}}</strong><br>
                            <strong> Email : {{$deals->seller->email}}</strong><br>
                            <strong> Address : {{$deals->seller->address}}</strong><br>

                        </div>

                        <hr>
                        <div class="col-md-8 col-xl-8">
                            <h3>Deal Details</h3>

                            <table class="table">
                                <tr>
                                    <td>Deal Name</td>
                                    <td>{{$deals->title}}</td>

                                </tr>
                                <tr>
                                    <td>Budget</td>
                                    <td>{{$deals->budget}}/= TK</td>
                                </tr>
                                <tr>
                                    <td>Advance Paid</td>
                                    <td>{{$deals->advance_amount}}/= TK</td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td>{{$deals->quantity}}</td>
                                </tr>
                                <tr>
                                    <td>Quaality Related Message</td>
                                    <td>{{$deals->quality_related}}</td>
                                </tr>
                                <tr>
                                    <td>Dead Line</td>
                                    <td>{{$deals->deadline}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-2 col-xl-2">

                        </div>
                        <div class="col-md-12 col-xl-12">
                            <h3>Deal Spacifications</h3>
                            <div class="col-md-10">
                                <table class="table">
                                    @php
                                    $data = json_decode($deals->specifications);
                                    @endphp
                                    @foreach ( $data as $key=>$value)
                                    <tr>
                                        <td>{{$key}}</td>
                                        <td>{{$value}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="col-md-2"></div>
                            

                        </div>

                        <div class="col-md-12 col-xl-12 col-offset-4" style="text-align: center">
                            <h3 style="text-align: left">Machine Details</h3>
                            <p style="text-align: left"><strong>Machine Name: {{$deals->machine->name}}</strong></p>
                            <div class="col-md-10">
                                <table class="table">
                                    @php
                                    $data = json_decode($deals->machine->specifications);
                                    @endphp
                                    @foreach ( $data as $key=>$value)
                                    <tr>
                                        <td>{{$key}}</td>
                                        <td>{{$value}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="col-md-2"></div>
                           
                        </div>

                        <div class="col-md-12 col-xl-12">
                            <h3>Other Details</h3>
                            <div class="col-md-10 col-xl-10">
                                <table class="table">
                                    <tr>
                                        <td>
                                            Seller Rating    
                                        </td>
                                        <td> Merchant Rating</td>
                                    
                                    </tr>
                                    <tr>
                                        
                                        <td>
                                            
                                            @foreach ($feedbacks as $feedback)
                                            @if ($feedback->merchant_id =='') 
                                            @if ($feedback->stars==1)
                                            <i class="fa-solid fa-star" style="color: green"></i>
                                            @elseif($feedback->stars==2)
                                            <i class="fa-solid fa-star" style="color: green"></i>
                                            <i class="fa-solid fa-star" style="color: green"></i>
                                            @elseif($feedback->stars==3)
                                            <i class="fa-solid fa-star" style="color: green"></i>
                                            <i class="fa-solid fa-star" style="color: green"></i>
                                            <i class="fa-solid fa-star" style="color: green"></i>
                                            @elseif($feedback->stars==4)
                                            <i class="fa-solid fa-star" style="color: green"></i>
                                            <i class="fa-solid fa-star" style="color: green"></i>
                                            <i class="fa-solid fa-star" style="color: green"></i>
                                            <i class="fa-solid fa-star" style="color: green"></i>
                                            
                                            @elseif($feedback->stars==5)
                                            <i class="fa-solid fa-star" style="color: green"></i>
                                            <i class="fa-solid fa-star" style="color: green"></i>
                                            <i class="fa-solid fa-star" style="color: green"></i>
                                            <i class="fa-solid fa-star" style="color: green"></i>
                                            <i class="fa-solid fa-star" style="color: green"></i>
                                            @endif
                                            @endif 
                                            @endforeach
                                             
                                              </td>
                                              <td>
                                                  
                                                  @foreach ($feedbacks as $feedback)
                                                  @if ($feedback->seller_id =='') 
                                                  @if ($feedback->stars==1)
                                                  <i class="fa-solid fa-star" style="color: green"></i>
                                                  @elseif($feedback->stars==2)
                                                  <i class="fa-solid fa-star" style="color: green"></i>
                                                  <i class="fa-solid fa-star" style="color: green"></i>
                                                  @elseif($feedback->stars==3)
                                                  <i class="fa-solid fa-star" style="color: green"></i>
                                                  <i class="fa-solid fa-star" style="color: green"></i>
                                                  <i class="fa-solid fa-star" style="color: green"></i>
                                                  @elseif($feedback->stars==4)
                                                  <i class="fa-solid fa-star" style="color: green"></i>
                                                  <i class="fa-solid fa-star" style="color: green"></i>
                                                  <i class="fa-solid fa-star" style="color: green"></i>
                                                  <i class="fa-solid fa-star" style="color: green"></i>
                                                  
                                                  @elseif($feedback->stars==5)
                                                  <i class="fa-solid fa-star" style="color: green"></i>
                                                  <i class="fa-solid fa-star" style="color: green"></i>
                                                  <i class="fa-solid fa-star" style="color: green"></i>
                                                  <i class="fa-solid fa-star" style="color: green"></i>
                                                  <i class="fa-solid fa-star" style="color: green"></i>
                                                  @endif
                                                  @endif 
                                                  @endforeach
                                                  
                                                  
                                              </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-2 col-xl-2"></div>
                            
                        </div>
                        <div class="col-md-12 col-xl-12">
                            <h3>Feedback</h3>
                            <div class="col-md-10 col-xl-10">
                               
                                <table class="table">
                                    <thead>
                                        <td> <h5>Merchant Feedback</h5></td>
                                        <td><h5>Seller Feedback</h5></td>
                                       
                                    </thead>
                                    <tr>
                                        <td>
                                            @foreach ($feedbacks as $feedback)
                                            @if ($feedback->seller_id =='') 
                                               {{ $feedback->message}}
                                            @endif 
                                            @endforeach
                                        </td>
                                      
                                        <td>
                                            @foreach ($feedbacks as $feedback)
                                            @if ($feedback->merchant_id =='') 
                                               {{ $feedback->message}}
                                            @endif 
                                            @endforeach
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-2 col-xl-2"></div>
                            
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
    function printableDiv(printableAreaDivId) {
     var printContents = document.getElementById(printableAreaDivId).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
    
@endsection
