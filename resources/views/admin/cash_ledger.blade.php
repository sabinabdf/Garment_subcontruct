@extends('admin/layout')
@section('content')
<style>
    .crr{
        margin-left: -25px;
    }
</style>
<div class="col-md-12 col-xl-12">
  <div class="card">
         <div class="col-md-12 col-xl-12">
             <h1>Cash Book</h1>
             <form action="{{route('cash_ledger_search')}}" method="post">
                @csrf
                 <table class="table table-bordered">
                     <tr>
                         <td><input type="date" name="start" class="form-control" required></td>
                         <td><input type="date" name="end" class="form-control" required></td>
                         <td><input type="submit" class="btn btn-success" value="Search"></td>
                     </tr>
                 </table>
             </form>


             <table class="table" >
                <tr >

                <!-- table one start  -->
                    <td>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="4">Dr</th>
                                </tr>
                                <tr class="bg-info" style="color:white">
                                        <th>Date</th>
                                        <th>Account Head <br> Note</th>
                                        <th>Ref</th>
                                        <th>Amount</th>
                                </tr>
                            </thead> 
                            <tbody>
                                <?php
                                $drAmount = 0;
                                $crAmount = 0;
                                $drDif = 0;
                                $crDif = 0;
                                $balance ='';
                                ?>
                            @foreach($collection as $c)                       
                                 <tr>
                                        <td>{{$c->collection_date}}</td>
                                        <td>{{$c->received_by}}</td>
                                        <td></td>
                                        <td>{{$c->amount}} <?php $drAmount+= $c->amount; ?></td>
                                </tr>   
                            @endforeach                  
                            </tbody>
                                       
                        </table>
                    </td>
                    <!-- table one end  -->
                    <!-- table one start  -->
                    <td>
                        <div class="crr">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                        <th colspan="4" style="text-align:right">Cr</th>
                                </tr>
                                <tr class="bg-info" style="color:white">
                                        <th>Date</th>
                                        <th>Account Head <br> Note</th>
                                        <th>Ref</th>
                                        <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
                                <?php 
                                
                                ?>
                              @foreach($withdrawal as $w)                          
                                <tr>
                                        <td>{{$w->payment_date}}</td>
                                        <td>{{$w->posted_by}}</td>
                                        <td></td>
                                        <td>{{$w->amount}} <?php $crAmount+= $w->amount; ?></td>
                                </tr>
                              @endforeach                          
                                                       
                            </tbody>
                                                    
                        </table>
                                                
                        </div>
                    </td>
            <!-- table one end  -->
                </tr>

                <?php 
   
                    if($drAmount>$crAmount){ $drDif=$drAmount-$crAmount; }
                    if($drAmount<$crAmount){ $crDif=$crAmount-$drAmount; }
                ?>                   
                <tr>
                    <td>
                        <table class="table table-bordered">
                                <tr>
                                        <td></td>
                                        <td><?php echo ($crDif==0) ? $balance='' : $balanc="<strong>Balance c/d</strong>"; ?></td>
                                        <td></td>
                                        <td class="text-right"><?= $crDif; ?> </td>
                                </tr>
                        </table>
                    </td>
                    <td>
                        <table class="table table-bordered">
                                <tr>
                                        <td></td>
                                        <td colspan="2"><?php  echo ($drDif==0) ? $balance='' : $balanc="<strong>Balance c/d</strong>";  ?></td>
                                        <td class="text-right"><?= $drDif; ?></td>
                                </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                    <table class="table table-bordered">
                <tr>
                    <td></td>
                    <td colspan="2 " class="text-right"><strong>Total</strong> </td>
                    <!-- condition ? value1 : value2;  -->
                    <td  class="text-right"> <?php echo ($drAmount>$crAmount) ? $drAmount : $drAmount+$crDif;
                    ?></td>
                </tr>
                    </table>
                                                
                    </td>
                    <td>
                    <table class="table table-bordered">
                <tr>
                                                    
                <div class="crr">
                    <td></td>
                    <td colspan="2 " class="text-right"><strong>Total</strong>  </td>
                                                           
                    <td class="text-right"><?php echo($drAmount<$crAmount) ? $crAmount : $crAmount+$drDif; ?>
                </td>
                </tr>
                    </table>
</td>
                </div>
                </tr>
                                  
                </table>
        </div>
    </div>
</div>
<!-- <h2>Cash Journal</h2>

<div class="mx-auto" style="width: 200px;">
<h3 class="align-middle">Hamim group</h3>
</div>


<ul class="nav justify-content-end">
  <li class="nav-item">
        <select name="" id="" class="form-control nav justify-content-end">
            <option value="">Select Company</option>
            @foreach($company as $c)
            <option value="">{{$c->name}}</option>
            @endforeach
        </select>
  </li>&nbsp;
  <li class="nav-item">
        <select name="" id="" class="form-control nav justify-content-end">
            <option value="">Select Ledger </option>
        </select>
  </li>
  
</ul>


<div class="container ">
  <div class="row">

    <div class="col">
       
     <table class="table table-bordered ">
        <tr>
            <th>Date</th>
            <th>Particulars</th>
            <th>J. Ref.</th>
            <th>Amount</th>
        </tr>

        <tr>
            <td>Date</td>
            <td>Particulars</td>
            <td>J. Ref.</td>
            <td>Amount</td>
        </tr>
     </table>
    </div>
    <div class="col">
    <table class="table table-bordered ">
        <tr>
        <th>Date</th>
            <th>Particulars</th>
            <th>J. Ref.</th>
            <th>Amount</th>
        </tr>

        <tr>
            <td>Date</td>
            <td>Particulars</td>
            <td>J. Ref.</td>
            <td>Amount</td>
        </tr>
    </table>
    </div>
    
  </div>
</div> -->
@endsection