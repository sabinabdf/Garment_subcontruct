@extends('front.layout')

@section('bennar')
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>My Machine List</h2>
      <p><a href="{{route('dashboard')}}" title="User Dashboard">User Dashboard</a> <i class="ti-angle-double-right"></i>My Machine List</p>
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
          <div class="user_dashboard_pic"> <img alt="user photo" src="{{asset('photos/profile/'.$data->photo)}}"> <span
              class="user-photo-action"> {{ Auth::user()->name }}</span> </div>
        </div>
        @include('front.dashSidebar')
      </div>
      <a href="{{route('dashboard')}}" class="btn btn-md " style="width:10%;background:#548CA8;color:white;"><i class="fas fa-arrow-left" style="color:white"></i>&nbsp;&nbsp;Back</a>
      <h3>My Machine List</h3>
      <div class="col-md-9">
        
        <div class="profile_detail_block">


          <table class="table table-bordered">
            <thead style="background-color: rgb(49, 134, 72); color:black">
              <tr>
                <th>SL</th>

                {{-- <th>Company</th>
                <th>Machine</th> --}}
                <th>Name</th>
                <th>Category</th>
                {{-- <th>Specification</th> --}}
                <th>Number of Machine</th>
                {{-- <th>Number of Machine Available</th> --}}

                <th>Photo</th>
                {{-- <th>Purchase Date</th> --}}
                {{-- <th>Brand</th> --}}
                {{-- <th>Status</th> --}}
                <th>#</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($userMachine as $key=>$item)
              <tr>
                <td>{{++$key}}</td>

                {{-- <td>{{$item->company->name}}</td>
                <td>{{$item->machine->name}}</td> --}}
                <td>{{$item->title}}</td>
                <td>{{$item->category->name}}</td>
                {{-- <td>{{$item->specifications}}</td> --}}
                <td>{{$item->number_of_machine}}</td>
                {{-- <td>{{$item->number_of_available}}</td> --}}
                <td>
                  <img src="{{url('uploads/'.$item->photo)}}" alt="" style="width: 200px">

                </td>
                {{-- <td>{{$item->purchase_date}}</td> --}}
                {{-- <td>{{$item->brand}}</td> --}}
                {{-- <td>{{$item->status}}</td> --}}
                <td>
                  <a href="{{route('editUserMachine',$item->id)}}" class="btn btn-primary"><i
                      class="fa-solid fa-pen-to-square"></i></a>
                  <form action="{{route('deleteUserMachine',$item->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" onclick="return confirm('Are you sure!!')" type="submit"><i
                        class="fa-solid fa-trash"></i></button>
                  </form>
                  <a href="{{route('machineDetails',$item->id)}}" class="btn btn-success"><i
                      class="fa-solid fa-bars"></i></a>



                </td>
              </tr>

              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection