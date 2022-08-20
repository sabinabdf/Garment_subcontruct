<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Machine;
use DB;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $machineList = Machine::get();
        return view('admin/machine_list',compact('machineList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/add_machine');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $r->validate([
            'name'=>'required',
            'category_id'=>'required',
            'brand'=>'required',
            'photo'=>'required'
        ]);
        $data = [];
        $key = $r->title;
        $value = $r->body;
        $assArr = array_combine($key, $value);

        $checkArr = true;
        foreach ($assArr as $key => $value) {
            if (empty($key) || empty($value) || $value==null) {
                $checkArr = false;
                break;
            }
        }
        if ($checkArr==false) {
            return redirect(route('machine.create'))->with('status', 'Your field must not be empty');
        }else{
            $jsonArr = json_encode($assArr);
            $data['name']=$r->name;
            $data['category_id']=$r->category_id;
            $data['specifications']=$jsonArr;
            $data['brand']=$r->brand;
            $file = $r->file('photo');
            if ($file) {
                $fileName =date('YmdHis').'.'.$file->getClientOriginalExtension();
                $filePath = "uploads/".$fileName;
                $data['photo'] = $fileName;
                $file->move('uploads',$fileName);
            }
            $result = Machine::create($data);
            if ($result) {
                return redirect(route('machine.index'));
            }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Machine $machine)
    {
        return view('admin/machine_details',compact('machine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $upData = Machine::find($id);
        return view('admin/update_machine',compact('upData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        $r->validate([
            'name'=>'required',
            'category_id'=>'required',
            'brand'=>'required'
        ]);
        $data = Machine::find($id);
        $key = $r->title;
        $value = $r->body;
        $assArr = array_combine($key, $value);

        $checkArr = true;
        foreach ($assArr as $key => $value) {
            if (empty($key) || empty($value) || $value==null) {
                $checkArr = false;
                break;
            }
        }
        if ($checkArr==false) {
            return redirect(route('machine.edit',$id))->with('status', 'Your field must not be empty');
        }else{
            $jsonArr = json_encode($assArr);
            $data->name=$r->name;
            $data->category_id=$r->category_id;
            $data->specifications=$jsonArr;
            $data->brand=$r->brand;
            $file = $r->file('photo');
            if ($file) {
                File::delete($data->photo);
                $fileName =date('YmdHis').'.'.$file->getClientOriginalExtension();
                $filePath = "uploads/".$fileName;
                $data->photo= $filePath;
                $file->move('uploads',$fileName);
                $result = $data->save();
                if ($result) {
                    return redirect(route('machine.index'));
                }
            }else{
                $result = $data->save();
                if ($result) {
                    return redirect(route('machine.index'));
                }
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Machine $machine)
    {
        File::delete($machine->photo);
        $machine->delete();
        return redirect(route('machine.index'));

    }
}
