<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Companies;
use DB;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            $data = Companies::get();
            return view('admin.company_list',compact('data'));
        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company');
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
            'address'=>'required',
            'company_bio'=>'required',
            'company_profile_one'=>'required',
            'company_profile_two'=>'required',
            'trade_license'=>'required',
            'logo'=>'required',
            'certificates'=>'required',
            'photo'=>'required',
            'phone'=>'required| Max:14',
            'email' => 'required| string|email|unique:users,email',
            'map'=>'required',
            'machine_post_limits'=>'required',
            'work_post_limits'=>'required',
            'status'=>'required',
        ]);
        $data = $r->all();

        $photo_multi = $r->file('certificates');

        if($photo= $r->file('trade_license')){
            $path = "photos/company/";
            $pname = md5(rand(100,1000)).'.'.$photo->getClientOriginalExtension();
            $photo->move($path,$pname);
            $data['trade_license'] = $pname;
        }
        
        if($photo_two = $r->file('logo')){
            $path_two = 'photos/company/';
            $pname_two = md5(rand(100,1000)).'.'.$photo_two->getClientOriginalExtension();
            $photo_two->move($path_two,$pname_two);
            $data['logo'] = $pname_two;
        }
        if($photo_three = $r->file('photo')){
            $path_three = 'photos/company';
            $pname_three = md5(rand(100,1000)).'.'.$photo_three->getClientOriginalExtension();
            $photo_three->move($path_three,$pname_three);
            $data['photo'] = $pname_three;
        }

        $j =[];
        $image_name = array();
        $image = array();
      
        if($files = $r->file('certificates')){
            foreach($files as $k=>$file){
                $img_name = md5(rand());
                $img_extention = strtolower($file->getClientOriginalExtension());
                $full_name = $img_name.'.'.$img_extention;
                $img_path = 'photos/company/';
                $img_url = $img_path.$full_name;
                $img_move = $file->move($img_path,$full_name);
                $image[] = $img_url;
                $image_name[] = $full_name; 
                
                $l = ++$k;
                $j[]=$full_name;
             //    $img_implode = implode('|',$image); 
            }
        }

    $da = json_encode($j);
    $data['certificates'] = $da;

    Companies::create($data);
 //    print_r($da);
 return redirect(route('companies.index'))->with('status','Your new company added successfully');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Companies $company)
    {
        
        return view('admin/companyDetailsInt',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Companies::find($id);
    
        return view('admin.edit_company',compact('data'));
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
            'address'=>'required',
            'company_bio'=>'required',
            'company_profile_one'=>'required',
            'company_profile_two'=>'required',
            'trade_license'=>'required',
            'logo'=>'required',
            'certificates'=>'required',
            'photo'=>'required ',
            'phone'=>'required| Max:14',
            'email' => 'required| string|email|unique:users,email',
            'map'=>'required',
            'machine_post_limits'=>'required',
            'work_post_limits'=>'required',
            'status'=>'required',
        ]);
        $data = $r->all();

        $photo_multi = $r->file('certificates');

        if($photo= $r->file('trade_license')){
            $path = "photos/company/";
            $pname = md5(rand(100,1000)).'.'.$photo->getClientOriginalExtension();
            $photo->move($path,$pname);
            $data['trade_license'] = $pname;
        }
        
        if($photo_two = $r->file('logo')){
            $path_two = 'photos/company/';
            $pname_two = md5(rand(100,1000)).'.'.$photo_two->getClientOriginalExtension();
            $photo_two->move($path_two,$pname_two);
            $data['logo'] = $pname_two;
        }
        if($photo_three = $r->file('photo')){
            $path_three = 'photos/company';
            $pname_three = md5(rand(100,1000)).'.'.$photo_three->getClientOriginalExtension();
            $photo_three->move($path_three,$pname_three);
            $data['photo'] = $pname_three;
        }

        $j =[];
        $image_name = array();
        $image = array();
      
        if($files = $r->file('certificates')){
            foreach($files as $k=>$file){
                $img_name = md5(rand());
                $img_extention = strtolower($file->getClientOriginalExtension());
                $full_name = $img_name.'.'.$img_extention;
                $img_path = 'photos/company/';
                $img_url = $img_path.$full_name;
                $img_move = $file->move($img_path,$full_name);
                $image[] = $img_url;
                $image_name[] = $full_name; 
                
                $l = ++$k;
                $j[]=$full_name;
             //    $img_implode = implode('|',$image); 
            }
        }

    $da = json_encode($j);
    $data['certificates'] = $da;
    

    
    $da = Companies::find($id);
    $do =$r->all();
    $da->update($data);
 //    print_r($da);
 return redirect(route('companies.index'))->with('status','Your company updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Companies::find($id);
        $data->delete();
        return redirect(route('companies.index'))->with('delete','Your company deleted successfully');
    }
}
