<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usermachines;
use App\Models\Companies;
use App\Models\Category;
use App\Models\Machine;

class WorkOrder extends Controller
{
    
    function index(){
        $data=Workorders::get();
      
        return view ('WorkOrder.index',compact('data'));
    }
}
