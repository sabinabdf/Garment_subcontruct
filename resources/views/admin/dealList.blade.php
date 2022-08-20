@extends('admin/layout')

@section('content')
<br><br><br><br>
<div class="row">
  <div class="col-lg-12">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Deal List</h3>
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col-12">
                      <div class="table-responsive">
                          <table class="table mb-0">
                              <thead>
                                  <tr>
                                     <th>SL</th>
                                     <th>Marchant Name</th>
                                     <th>Seller Name</th>
                                     <th>Title</th>
                                     <th>Budget</th>
                                     <th>Advance</th>
                                     <th>Quantity</th>
                                     <th>Deadline</th>
                                     <th>Expiry Reminders</th>
                                     <th>#</th>
                                  </tr>
                              </thead>
                              <tbody>
                                    @foreach ($deals as $key=>$d)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$d->marchant->name}}</td>
                                            <td>{{$d->seller->name}}</td>
                                            <td>{{$d->title}}</td>
                                            <td>{{$d->budget}}</td>
                                            <td>{{$d->advance_amount}}</td>
                                            <td>{{$d->quantity}}</td>
                                            <td>{{$d->deadline}}</td>
                                            <td>
<div class="progress">
  <?php 
  if($d->created_at == null){
    echo " 0 %";
  }else{
    $startDate = strtotime($d->created_at->format('m/d/Y'));
    $endDate = strtotime($d->deadline);
    $totalDays = ($endDate - $startDate)/86400;
    $spendDays = strtotime(date('m/d/Y'));
    $spendTotalDays = ($spendDays - $startDate)/86400;
    if($totalDays==0){
      $count1 = $spendTotalDays / 1;
    }else{
      $count1 = $spendTotalDays / $totalDays;
    }
    
    $count2 = $count1 * 100;
    $count = number_format($count2, 0);
    // dd($count);
    ?>
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $count;?>%; <?php  if($count<50){echo "background-color: green";}elseif($count<90){echo "background-color: yellow;color: black";}else{echo "background-color: red";}?>;">
    <?php } ?>
  </div>
</div>                                      </td>
                                            <td>
                                                <a href="{{route('dealsDetails',$d->id)}}" class="btn btn-primary"><i class="fas fa-align-justify"></i></a>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection






