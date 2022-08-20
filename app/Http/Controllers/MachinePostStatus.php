<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMachines;
use App\Models\Companies;
use App\Models\User;
use Auth;

class MachinePostStatus extends Controller
{
    function machine_status(){
        
        if(Auth::user()->name){
            $data = User::find(Auth::user()->id);
            $company_id = Auth::user()->company_id;
         }
        // $info=UserMachines::get();
        // dd($data->photo);
        $info=UserMachines::where('company_id',$company_id)->get();
        return view ('MachinePostView.index',compact('data','info'));
    }

    // function machine_status(){
    //     $data=UserMachines::get();
    //     return view ('front.statusPost',compact('data'));
    // }



    
    function edit_status($id)
    {
        if(Auth::user()->name){
            $data = User::find(Auth::user()->id);
         }
        $info=UserMachines::find($id);

        // dd($data);
        return view ('MachinePostView.edit_status',compact('data','info'));
    }

    // function edit_status($id){
       
    //     $data=UserMachines::find($id);
    //     //dd($data);
    //     return view ('front.edit_statusPost',compact('data'));
    // }


    function update_status(Request $r,$id){
        $data = $r->all();
         //dd($id);
         //dd($data);
                
            $update = UserMachines::find($id);
            $update ->title = $r->title;
            $update ->number_of_machine = $r->number_of_machine;
            $update ->number_of_available = $r->number_of_available;
            $update ->status = $r->status;
         
            
            $update ->update();
        
             return redirect(route('machine_status'));
        
            }
}
