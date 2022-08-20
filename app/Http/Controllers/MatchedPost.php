<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usermachines;
use App\Models\Workorders;
use App\Models\Category;
use App\Models\Machineposts;
use App\Models\Machine;
use App\Models\User;
use Auth;

class MatchedPost extends Controller
{
    function matchedPost(){
        //$matchedPost= Workorders::with(['Category.Usermachines'])->whereHas("Category.Workorders")->whereHas("Usermachines.Machineposts")->get();
       $data = Workorders::get();
       return view('WorkOrder.matchedPost',compact('data'));
     }
 
     function matchedMachinePost(){
       $machineposts = Machineposts::get();
     //dd($machineposts);
       return view('WorkOrder.matchedMachinePostDetails',compact('machineposts'));
     }
 
   
     public function workorder_details($id){
       $w_details=Workorders::find($id);
        
       if(Auth::user()->name){
           
         $data = User::find(Auth::user()->id);
         
           }
           // dd($data);
 
       return view('WorkOrder.workorder_details',compact('w_details','data'));
 
 
     }
 
 
     
     public function machinePosts_details($id){
       $w_details=Machineposts::find($id);
        
       if(Auth::user()->name){
           
         $data = User::find(Auth::user()->id);
         
           }
           // dd($data);
 
       return view('WorkOrder.machinePosts_details',compact('w_details','data'));
 
 
     }
 
}
