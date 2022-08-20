<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usermachines;
use App\Models\Companies;
use App\Models\Category;
use App\Models\Machine;

class UserMachine extends Controller
{
    function machine_show(){
        $data=UserMachines::get();
        return view ('UserMachine.machine_show',compact('data'));
    }
    function edit_show($id){
       
        $data=UserMachines::find($id);
        //dd($data);
        return view ('UserMachine.edit_show',compact('data'));
    }

    function update_show(Request $r,$id){
        $data = $r->all();
         //dd($id);
         //dd($data);
                
            $update = UserMachines::find($id);
            $update ->title = $r->title;
            $update ->number_of_machine = $r->number_of_machine;
            $update ->number_of_available = $r->number_of_available;
            $update ->status = $r->status;
         
            
            $update ->update();
        
             return redirect(route('userMachine_show'));
        
            }

            function index(){
                $data=UserMachines::get();
                return view ('UserMachine.index',compact('data'));
            }
            function indexTwo(){
                $data=UserMachines::get();
                return view ('UserMachine.indexTwo',compact('data'));
            }


            // function add(){


            //     $list=Companies::get();
            //     $file=Catgories::get();
            //     $machine=Machines::get();
        
            //     return view ('UserMachine.add',compact('list','file','machine'));
            // }
        
}








