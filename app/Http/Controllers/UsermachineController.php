<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Usermachines;

class UsermachineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $usermachine = Usermachines::get();
        return view('admin.usermachine_list',compact('usermachine'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Usermachines $usermachine )
    {

        return view('admin.usermachine_details',compact('usermachine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usermachine = Usermachines::find($id);
    
        return view('admin.usermachine_edit',compact('usermachine'));
   
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
    //    dd($request);
    

       $r->validate([
        'company_id'=>'required',
        'category_id'=>'required',
        'machine_id'=>'required',
        'title_one'=>'required',
        'number_of_machine'=>'required',
        'purchase_date'=>'required',
        'photo'=>'required',
        'brand'=>'required',
    ]);
    $data = Usermachines::find($id);
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
        return redirect(route('usermachine.edit',$id))->with('status', 'Your field must not be empty');
    }else{
        $jsonArr = json_encode($assArr);
        $data->company_id=$r->company_id;
        $data->category_id=$r->category_id;
        $data->machine_id=$r->machine_id;
        $data->title=$r->title_one;
        $data->number_of_machine=$r->number_of_machine;
        $data->specifications=$jsonArr;
        $data->purchase_date=$r->purchase_date;
        $data->brand=$r->brand;
        $data->status=$r->status;
        $data->approved=$r->approved;
        $file = $r->file('photo');
        if ($file) {
            File::delete($data->photo);
            $fileName =date('YmdHis').'.'.$file->getClientOriginalExtension();
            $filePath = "uploads/".$fileName;
            $data->photo= $fileName;
            $file->move('uploads',$fileName);
            $result = $data->save();
            if ($result) {
                return redirect(route('usermachine.index'));
            }
        }else{
            $result = $data->save();
            if ($result) {
                return redirect(route('usermachine.index'));
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
    public function destroy($id)
    {
        $usermachine = Usermachines::find($id);
        $usermachine->delete();

        return redirect(route('usermachine.index'))->with('delete','Your user machine deleted successfully');
    }
}
