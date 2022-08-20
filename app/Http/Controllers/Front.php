<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Machineposts;
use App\Models\Workorders;
use App\Models\User;
use App\Models\Companies;
use App\Models\Usermachines;
use App\Models\Category;
use App\Models\Machine;
use App\Models\Jobschedules;
use App\Models\Jobfiles;
use App\Models\Designs;
use App\Models\Collections;
use App\Models\Withdrawals;
use App\Models\Chating;
use App\Models\Feedback;
use Auth;
use App\Models\Proposal;
use App\Models\Deals;
// use App\Models\deliveryRequest;
use App\Models\DeliveryRequest;

class Front extends Controller
{
     public function index()
     {
      $category = Category::where('id' ,'>' ,0)->orderBy('id', 'desc')->get();
      $company = Companies::where('id' ,'>' ,0)->orderBy('id', 'desc')->get();
      $machine_order = machineposts::where('status','active')->orderBy('id', 'desc')->get();
      // dd($machine_order);
      $work_order = workorders::where('status','active')->orderBy('id', 'desc')->get();

      // dd($work_order);
        return view('front.index',compact('machine_order','work_order','category','company'));
     }

     public function signup(){
      return view('front.signup');
   }

   // arif start
   public function deal_collection_ledger($id)
{
   $collection = Collections::where('status','active')->where('deal_id',$id)->get();
   
   $withdrawal = Withdrawals::where('status','active')->where('deal_id',$id)->get();
   $company = Companies::get();
   // dd($withdrawal);
   return view('front.cash_ledger',compact('company','collection','withdrawal'));
   
}
   public function timeline(){
      $machine_order = machineposts::get()->where('status','active');
      
      $work_order = workorders::get()->where('status','active');

      // $a = [];
      // foreach($machine_order as $m){
      //    $a[] = ['type'=>'machine', 'date'=>$m->created_at,'data'=>$m];
      // }

      // experiment start 
      $a = [];
      foreach($machine_order as $m){
         $date= date('Y-m-d h:i:s', strtotime($m->created_at));

         
         $a[] = ['type'=>'machine', 'date'=>$date,'data'=>$m];
      }

      // experiment end 


      // $b = [];
      // foreach($a as $d){
         
      //    $b[] = $d['date'];
      // }
      // dd($b);
      foreach($work_order as $m){

         $date= date('Y-m-d h:i:s', strtotime($m->created_at));
         $a[] = ['type'=>'machine', 'date'=>$date,'data'=>$m];
      }
// dd($a);
//  echo "<pre>";
//  print_r($a);
//  exit;
    

      // dd($a->date);
      // // $s = sort($a['date']);
      // // dd($s);
      // // 
      // // $b = $a->sortBy('date', SORT_REGULAR, true);

   // experment 2 start 

   // $b = [];
   //    foreach($a as $d){
         
   //       $b[] = $d['date'];
   //    }
      
   
      // dd($b);

   // experment 2 end 


//    $j = array_sort_by_column($a, 'date');


// function array_sort_by_column(&$array, $column, $direction = SORT_ASC) {
//     $reference_array = array();

//     foreach($a as $key => $row) {
//         $reference_array[$key] = $row[$column];
//     }

//     $pp = array_multisort($reference_array, $direction, $array);
// }
      
      // dd($a);
     




// $sorted = $a->sortBy("date")->toArray();

      
// dd($sorted);  

      
      return view('front.timeline',compact('machine_order','work_order','a'));
   }

   public function view_timeline($id)
   {
      $work = Workorders::find($id);
      return view('front.view_timeline',compact('work'));
   }
   
   public function go_timeline($id)
   {
      $machine = Machineposts::find($id);
      return view('front.view_timeline',compact('machine'));
   }

   public function all_post()
   {
      $company = Companies::get();
      $machine_post_count = Machineposts::get();
      return view('front.all_post',compact('company'));
   }
   
   public function all_category()
   { 
      $category = Category::where('id' ,'>' ,0)->get();
      // dd($category);
      return view('front.all_category',compact('category'));
   }

   public function contact()
   {
      return view('front.contact');
   }
  //  arif end 
//   sumaiya start 
public function add_milestone($id)
    {
      if(Auth::user()->name){
          
         $data = User::find(Auth::user()->id);
           }
        return view('front.add_milestone',compact('id','data'));
    }
    
    public function store_milestone(Request $r,$id)
    {
      // dd($r);
      $jobschesule_id = DB::table('jobschedules')->insertGetId([
         'deal_id' => $r->deal_id,
         'title' => $r->title,
         'description' => $r->description,
         'start_date' => $r->start_date,
         'end_date' => $r->end_date,
         'feedback' => $r->feedback,
     ]);
   //   echo $id;


//  

if($photo_three = $r->file('design_photo')){
   $path_three = 'photos/milestone/';
   $pa= md5(rand(100,1000)).'.'.$photo_three->getClientOriginalExtension();
   $photo_three->move($path_three,$pa);
   
}

 Designs::create([
   'jobschedule_id' => $jobschesule_id,
   'title' => $r->design_title,
   'photo' => $pa
]);
// dd($jobschesule_id);
return redirect(route('progress_milestone','jobschesule_id'));

    }

    public function progress_milestone($id)
    {
      if(Auth::user()->name){
          
         $data = User::find(Auth::user()->id);
           }
         $deal =  Deals::where('status','active')->orWhere('status','completed')->get();
      $job = Jobschedules::where('status','active')->orWhere('status','completed')->get();
         //   dd($deal);
      $count = Jobschedules::get()->count();
      $count_complete = Jobschedules::where('status','completed')->get()->count();
      // dd($count_complete);
      
      return view('front.list_milestone',compact('data','job','count','count_complete','deal'));
      
    }

    public function delete_milestone($id)
    {
      $jobshedule = Jobschedules::find($id);
      $jobshedule->delete();
      return redirect(route('progress_milestone'));
    }
//   sumaiya end

   public function profile()
   {
        if(Auth::user()->name){
          
      $data = User::find(Auth::user()->id);
        }
      return view('front.profile',compact('data'));
   }

   public function edit_milestone($id)
   {
         if(Auth::user()->name){
          
         $data = User::find(Auth::user()->id);
           }
         // dd($id);
         $jobschedule = Jobschedules::find($id);
         // dd($jobschedule->id);
         $designs = Designs::where('jobschedule_id',$id)->get();
         foreach($designs as $design){
            $d = $design;
         }
         // dd($design);

         return view('front.edit_milestone',compact('jobschedule','design','id','data','d'));
   }
 

   public function update_milestone(Request $r,$id)
   {
      //  dd($id);
      $jobsChedule = Jobschedules::find($id);

      $jobschedu = [
         'deal_id' => $r->deal_id,
         'title' => $r->title,
         'description' => $r->description,
         'start_date' => $r->start_date,
         'end_date' => $r->end_date,
         'feedback' => $r->feedback,
      ];

      $jobsChedule->update($jobschedu);

      // dd($job_id);
   //   echo $id;


//  

if($photo_three = $r->file('design_photo')){
   $path_three = 'photos/milestone/';
   $pa= md5(rand(100,1000)).'.'.$photo_three->getClientOriginalExtension();
   $photo_three->move($path_three,$pa);
   
}

$design_data = [
   'jobschedule_id' => $id,
   'title' => $r->design_title,
   'photo' => $pa
];
$d_id = $r->design_id;
// dd($d_id);
 $design = Designs::find($r->design_id);
$design->update($design_data);
// dd($jobschesule_id);
return redirect(route('progress_milestone','jobschesule_id'));
   }

   public function milestone_view($id)
   {
      // dd($id);
      if(Auth::user()->name){
          
         $data = User::find(Auth::user()->id);
           }
      $jobsChedule = Jobschedules::find($id);
      // dd($jobsChedule);
      $design = Designs::get();
         //   dd($design);
      return view('front.milestone_view',compact('jobsChedule','design','data','id'));
   }

      public function dashboard()
   {
      if(Auth::user()->name){
         $user = Auth::user()->company_id;
    
         $machine = Machineposts::get()->where('status','active');
        
         $data = User::find(Auth::user()->id);
         $work_order = workorders::get()->where('status','active');
         $workorder=Workorders::where('company_id',$user)->get();
         
         $a = '';
         $b='';
         foreach($work_order as $w){
            if($w->company_id == $user){
               $a = $w->company_id;
               $b = $w->companies->id;
            }
         }
    

        
      }

      if(Auth::user()->name){

          $machine_post = Machineposts::get()->where('status','active');
          $machine_post_count = $machine_post->count();

         // dd($machine_post_count);
            $f = Auth::user()->company_id;
         
         $match = Machineposts::get();
         $mm = '';
         foreach($match as $ww){
    
            $mm = $ww->usermachine->company_id;
            
         }
         
         
         // dd($mm);

         // $machineposts = Machineposts::where($f,$mm)->get();
         $machineposts=Machineposts::get();
         // dont need before ***
         $workorder_count=Workorders::where('company_id',$user)->get()->count();
         // dd($workorder_count);

                    
      }
      // delivery approval  for seller  start
      $delivery_approval = DeliveryRequest::where('merchant_approval','no')->where('seller_approval','no')->where('seller_id',$f)->whereNot('deliveryman_id',Null)->first();
      $delivery_approval_c = DeliveryRequest::where('merchant_approval','no')->where('seller_approval','no')->where('seller_id',$f)->whereNot('deliveryman_id',Null)->get();                 
      $delivery_approval_count = $delivery_approval_c->count();         


      $delivery_approval_yes = DeliveryRequest::where('merchant_approval','no')->where('seller_approval','yes')->where('seller_id',$f)->whereNot('deliveryman_id',Null)->first();
      $delivery_approval_yes_c = DeliveryRequest::where('merchant_approval','no')->where('seller_approval','yes')->where('seller_id',$f)->whereNot('deliveryman_id',Null)->get();
      $delivery_approval_yes_count = $delivery_approval_yes_c->count();
      // dd($delivery_approval_yes);

      // delivery approval  for merchant  start
      $delivery_approval_merchant = DeliveryRequest::where('merchant_approval','no')->where('seller_approval','yes')->where('merchant_id',$f)->whereNot('deliveryman_id',Null)->first();
      $delivery_approval_merchant_c = DeliveryRequest::where('merchant_approval','no')->where('seller_approval','yes')->where('merchant_id',$f)->whereNot('deliveryman_id',Null)->get();          
      $delivery_approval_merchant_count = $delivery_approval_merchant_c->count();
                           // dd($delivery_approval_merchant);  
      $delivery_approval_merchant_yes = DeliveryRequest::where('merchant_approval','yes')->where('seller_approval','yes')->where('merchant_id',$f)->whereNot('deliveryman_id',Null)->first();
      $delivery_approval_merchant_yes_c = DeliveryRequest::where('merchant_approval','yes')->where('seller_approval','yes')->where('merchant_id',$f)->whereNot('deliveryman_id',Null)->get();          
      $delivery_approval_merchant_yes_count = $delivery_approval_merchant_yes_c->count();

      return view('front.dashboard',compact('data','machine_post','workorder','machineposts','workorder_count','delivery_approval_count','delivery_approval','f','delivery_approval_yes_count','delivery_approval_yes','delivery_approval_merchant','delivery_approval_merchant_count','delivery_approval_merchant_yes','delivery_approval_merchant_yes_count'));
   }
            // inun new 3rd session dashboard end
      
   public function c_pass()
   {
      if(Auth::user()->name){
         $data = User::find(Auth::user()->id);
      }

    
      return view('front.c_pass',compact('data'));
   }
   
   public function change_pass(Request $r)
   {
         $r->validate([
            'old_pass' => 'required',
            'new_pass' => 'required|min:8',
            'confirm_pass' => 'required|min:8'
         ]);


         if(Auth::user()->name){
            $data = User::find(Auth::user()->id);
         }

         if($r->new_pass == $r->confirm_pass){
            $confirm_password = Hash::make($r->confirm_pass);
         }else{
            return redirect(route('c_pass'))->with('status','Your password does not match');
         }
         $data = $r->all();

      $pass = Hash::make($r->old_pass);


         $old_pass = $r->old_pass;
         $password = Auth::user()->password;
         if (Hash::check($old_pass, $password)) {
            // dd($confirm_password.'The passwords match...');
        }
         
        $users_up = User::find(Auth::user()->id);
        $users_up->update([
         'password' => $confirm_password
        ]);

        return redirect(route('c_pass'))->with('success','Your password change successfully');
   }
   public function edit_profile(Request $r,$id)
   {
      $r->validate([
         'f_name' => 'required',
         'designation' => 'required',
         'email' => 'required',
         'phone' => 'required',
         'profile' => 'required',
      ]);

      $edit = User::find($id);
     $data = $r->all();
     if($photo = $r->file('profile')){
      $photo_path = 'photos/profile/';
      $photo_name = date('Ymdhis').'.'.$photo->getClientOriginalExtension();
      $photo->move($photo_path,$photo_name);
      $edit->photo = $photo_name;
     }
     
     
     $edit->name = $r->f_name;
     $edit->phone = $r->phone;
     $edit->email = $r->email;
     $edit->password = Hash::make($r->password);
    
     $edit->designation = $r->designation;
   //   $edit->password = $password;
      $edit->update();
     
     return redirect(route('profile'));


    
   }


   // ashiq start
   public function company_profile()
    {
      if(Auth::user()->name){
         $data = Companies::find(Auth::user()->id);
      }
      
        return view('front.company_profile', compact('data'));
      //   ,compact('data')
    }

    public function show_company_profile($id)
    {
      $data = Companies::find($id);
  
      return view('front.company_profile',compact('data'));

    }
    
    public function show_company_profile_login($id)
    {
      // $workorder = 
      if(Auth::user()->name){
         $info = Companies::find(Auth::user()->id);
      }
      $data = Companies::find($id);
      $machinepost = Machineposts::where('status','active')->get();
      foreach($machinepost as $m ){
         $machinepost_company_id = $m->usermachineID->company_id;
         // dd($machinepost_company_id);
      }

  
      return view('front.company_profile',compact('data','info','machinepost'));

    }
    
    public function show_companyList($id)
    {
      $data = Companies::find($id);
  
      return view('front.company_profile',compact('data'));

    }

    

   // ashiq end

   // jahid start

   function dealOverview($id){
      $companyID = Auth::user()->company_id;
      $data = User::find(Auth::user()->id);
      
    //   $d = Deals::where('status','complete')->get();
      $deals = Deals::find($id);
      $feedbacks = Feedback::where('deal_id',$deals->id)->get();
      
      //  $marchentCompany =$deals->workorderID->company_id;
      
      //  $sellerCompany = $deals->seller->usermachines->company_id;
      // //  if($companyID===$marchentCompany){
      //   $status = 'marchent' ;
      //  //  $marchentCompanyID = $marchentCompany;
  
      //  }
      //  if($companyID==$sellerCompany){
      //     $status = 'seller';
      //     // $sellerCompanyID = $sellerCompany;
      //  }
      
      
    
      return view('front.dealOverview',compact('deals','data','feedbacks')); 
    }
   // 3rd session 



   function userMacines(){
      $data = User::find(Auth::user()->id);
      $category= Category::get();
      $company= Companies::get();
      $machine= Machine::get();

      return view('front.userMacines',compact('category','company','machine','data'));
   }
   function saveUserMachine(request $data){
      
      $company_id = Auth::user()->company_id; 
      $data->validate([
         
         'category_id'=>'required',
         
         'photo'=>'required',
         'title'=>'required',
         'number_of_machine'=>'required',
         'key'=>'required',
         'value'=>'required',
         'purchase_date'=>'required',
         'number_of_available'=>'required',
         'brand'=>'required',
         'status'=>'required'
      ]);

         $array =[];
        $key = $data->key;
        $value = $data->value;
        $assArr = array_combine($key, $value);
        $checkArr = true;
        foreach ($assArr as $key => $value) {
            if (empty($key) || empty($value) || $value==null) {
                $checkArr = false;
                break;
            }
        }
        if ($checkArr==false){
         return redirect(route('userMacines'))->with('status', 'Your field must not be empty');
        }else{
         $jsonArr = json_encode($assArr);
         $file = $data->file('photo');
         if ($file) {
            $fileName =date('YmdHis').'.'.$file->getClientOriginalExtension();
            $filePath = "uploads/".$fileName;
            $array['photo'] = $fileName;
            $file->move('uploads',$fileName);
        }
           
         if(!isset($data->machine_id)){
            $m = [
               'name'=>$data->title,
               'category_id'=>$data->category_id,
               'specifications'=> $jsonArr,
               'brand'=> $data->brand,
               'photo'=> $filePath
            ];
          $machine_id =  Machine::create($m);
          $array['machine_id']=$machine_id->id;

         }
         if(isset($data->machine_id)){
            $array['machine_id']=$data->machine_id;
         }
         
         
         $array['company_id']=$company_id;
         $array['specifications']=$jsonArr;
         $array['category_id']=$data->category_id;
        
         $array['title']=$data->title;
      
        $array['number_of_machine']=$data->number_of_machine;
        $array['purchase_date']=$data->purchase_date;
        $array['number_of_available']=$data->number_of_available;
        $array['brand']=$data->brand;
        $array['status']=$data->status;
        $result = Usermachines::create($array);
        if ($result) {
            return redirect(route('getUserMachine'));
        } 
        }
      
   }
   function getMachine($id){
      $data = Machine::find($id);
      // dd($data);
      // $arr = ['id'=>$id];
      // $data = json_encode($arr);
      return response()->json($data, 200);
      // print_r($data);
   }
   function getUserMachine(){

      $data = User::find(Auth::user()->id);
      $m = Auth::user()->company_id;
      // dd($m);
      $userMachine = Usermachines::where('company_id',Auth::user()->company_id)->get();
      // dd($userMachine);
      return view('front.UserMachineTable',compact('userMachine','data'));
   }
   function editUserMachine($id){
      $data = User::find(Auth::user()->id);
      $userMachine = Usermachines::find($id);
      $category= Category::get();
      $company= Companies::get();
      $machine= Machine::get();
      return view('front.editUserMachine',compact('userMachine','category','company','machine','data'));
   }
   function updateUserMachine(request $data, $id){
      $userMachine = Usermachines::find($id);

      $d= array([
         'company_id'=>$data->company_id,
         'category_id'=>$data->category_id,
         'machine_id'=>$data->machine_id,
         'title'=>$data->title,
         'number_of_machine'=>$data->number_of_machine,
         'purchase_date'=>$data->purchase_date,
         'number_of_available'=>$data->number_of_available,
         'brand'=>$data->brand,
         'status'=>$data->status,
      ]);
      $file = $data->file('photo');
      if($file){
            $fileName =date('YmdHis').'.'.$file->getClientOriginalExtension();
            $filePath = "uploads/".$fileName;
            $d['photo'] = $fileName;
            $file->move('uploads',$fileName); 
      }
      $key = $data->key;
        $value = $data->value;
        $assArr = array_combine($key, $value);
      $checkArr = true;
        foreach ($assArr as $key => $value) {
            if (empty($key) || empty($value) || $value==null) {
                $checkArr = false;
                break;
            }
        }
        if ($checkArr==false){
         return redirect(route('editUserMachine',$id))->with('status', 'Your field must not be empty');
        }
      
        $jsonArr = json_encode($assArr);
        $d['specifications']=$jsonArr;
        $userMachine->update($d);
        return redirect(route('getUserMachine'));
   }
   function deleteUserMachine(request $data , $id){
      $userMachine = Usermachines::find($id);
      $userMachine->delete();
      return redirect(route('getUserMachine'));
   }
   function machineDetails($id){
      $data = User::find(Auth::user()->id);
      $userMachine = Usermachines::find($id);
      return view('front.machineDetailsView',compact('userMachine','data'));
   }


   // message

   function chating($id){
      $deals = Deals::find($id);
      $data = User::find(Auth::user()->id);
      $chating = Chating::where('deal_id',$id)->orderBy('created_at', 'ASC')->get();
      //  dd($chating);
      if($chating){
         
         $chatingData = $chating;
      }
      return view('front.chating',compact('deals','data','chatingData'));
   }
   function sendMessage(request $data){
      // return response()->json( $data);
      $user_id = Auth::user()->id;
      $array = [
         'deal_id'=>$data->deal_id,
         'merchant_id'=>$data->merchant_id,
         'seller_id'=>$data->seller_id,
         'user_id'=>$user_id ,
         'message' =>$data->message
      ];
      
      
       
     
       $re =  Chating::create($array);
       

       if($re){
         return response()->json( $re);
       }
       
        
       
      
   }

// jahid end 
   // ali start
   public function add_workorder(){
      if(Auth::user()->name){
          
         $data = User::find(Auth::user()->id);
           }
       $compamyID = Auth::user()->company_id;
      
      $company=companies::where('id',$compamyID)->get();
      $category=category::get();
       $machine=machine::get();
       
      return view('front.add_workorder',compact('data','company','category','machine'));
   }
   
   public function save_workorder(Request $order){
      //   dd($order);
         $order->validate([
            'company_id'=>'required',
            'category_id'=>'required',
            'machine_id'=>'required',
            'spec_title'=>'required',
            'spec_value'=>'required',
            'title'=>'required',
            'budget'=>'required',
            'deadline'=>'required',
            'quantity'=>'required',
            'quality_related'=>'required'
            
        ]);
        $data = [];
        $key = $order->spec_title;
        $value = $order->spec_value;
        $assArr = array_combine($key, $value);
   
        $checkArr = true;
        foreach ($assArr as $key => $value) {
            if (empty($key) || empty($value) || $value==null) {
                $checkArr = false;
                break;
            }
        }
      
            $jsonArr = json_encode($assArr);
            $data['company_id']=$order->company_id;
            $data['category_id']=$order->category_id;
            $data['machine_id']=$order->machine_id;
            $data['title']=$order->title;  
            $data['specifications']=$jsonArr;
            $data['budget']=$order->budget;
            $data['deadline']=$order->deadline;
            $data['quantity']=$order->quantity;
            $data['quality_related']=$order->quality_related;
            // $data['status']='pending';
           
            $result =workorders::create($data);
            if ($result) {
                return redirect(route('dashboard'));
            }
         
        }

        public function workorder_details($id){
         $w_details=Workorders::where('status','active')->find($id);
         // dd($w_details);
         // $category = Category::where('status','active')->get();
         if(Auth::user()->name){
             
            $data = User::find(Auth::user()->id);
              }
              $machine_id = $w_details->machine_id;
               // dd($machine_id);
            //   $work_order = Workorders::where('category_id',$re)->get();

              $mahinepost= Machineposts::where('status','active')->get();
            //   dd($work_order);
         return view('front.workorder_details',compact('w_details','data','mahinepost','machine_id'));
   
   
        }

        public function edit_workorder($id){
         $edit_workorder=Workorders::find($id);
 
       $category= Category::get();
       $company= Companies::get();
       $machine= Machine::get();
       if(Auth::user()->name){
           
          $data = User::find(Auth::user()->id);
            }
       return view('front.edit_workorder',compact('edit_workorder','category','company','machine','data'));
 
 
      }

      public function update_workorder(Request $order, $id){
         $update_workorder=Workorders::find($id);
         $data = [];
        $key = $order->spec_title;
        $value = $order->spec_value;
        $assArr = array_combine($key, $value);
   
        $checkArr = true;
        foreach ($assArr as $key => $value) {
            if (empty($key) || empty($value) || $value==null) {
                $checkArr = false;
                break;
            }
        }
      
            $jsonArr = json_encode($assArr);
            $data['company_id']=$order->company_id;
            $data['category_id']=$order->category_id;
            $data['machine_id']=$order->machine_id;
            $data['title']=$order->title;  
            $data['specifications']=$jsonArr;
            $data['budget']=$order->budget;
            $data['deadline']=$order->deadline;
            $data['quantity']=$order->quantity;
            $data['quality_related']=$order->quality_related;
            // $data['status']='pending';
           
            $result =$update_workorder->update($data);
            if ($result) {
                return redirect(route('dashboard'));
            }
   
        }

        public function front_delete_workorder($id){

         $delete_order=Workorders::find($id);
         // dd( $delete_order);
         $delete_order->delete();
         return redirect(route('dashboard'));
   
        }

        public function think_proposal($id){
         $proposal=Proposal::find($id);
        // dd($proposal);
        
        if(Auth::user()->name){
         
           $data = User::find(Auth::user()->id);
             }
        return view('front.accept_deals',compact('data','proposal'));

    }

    public function accept_deal(Request $deal){
      // dd($deal);
      $deal->validate([
         'merchant_id'=>'required',
         'seller_id'=>'required',
         'machine_id'=>'required',
         'title'=>'required',
         'spec_title'=>'required',
         'spec_value'=>'required',
         'budget'=>'required',
         'advance_amount'=>'required',
         'advance_paid'=>'required',
         'deadline'=>'required',
         'quantity'=>'required',
         'quality_related'=>'required'
         
     ]);
     $data = [];
     $key = $deal->spec_title;
     $value = $deal->spec_value;
     $assArr = array_combine($key, $value);

     $checkArr = true;
     foreach ($assArr as $key => $value) {
         if (empty($key) || empty($value) || $value==null) {
             $checkArr = false;
             break;
         }
     }
   
         $jsonArr = json_encode($assArr);
         $data['merchant_id']=$deal->merchant_id;
         $data['seller_id']=$deal->seller_id;
         $data['machine_id']=$deal->machine_id;
         $data['title']=$deal->title;  
         $data['specifications']=$jsonArr;
         $data['budget']=$deal->budget;
         $data['advance_amount']=$deal->advance_amount;
         $data['advance_paid']=$deal->advance_paid;
         $data['deadline']=$deal->deadline;
         $data['quantity']=$deal->quantity;
         $data['quality_related']=$deal->quality_related;
         // $data['status']='pending';
        
         $result =Deals::create($data);
         if ($result) {
             return redirect(route('deal_list'));
         }

   }

   public function deal_list(){

      $companyID = Auth::user()->company_id;
      

      $deal_list=Deals::where('merchant_id',$companyID)->orwhere('seller_id',$companyID)->get();
   //   dd($deal_list);
     $request = '';
     if(isset($deal_list)){
       foreach($deal_list as $d){
        
         $deliveryRequest  = DeliveryRequest::where('deal_id',$d->id)->first();
         // dd($deliveryRequest);
         if(empty($deliveryRequest)){
            $request = 'not send';
         }else{
            $request =  'send';
         }
       }
      }
      
      if(Auth::user()->name){
          
         $data = User::find(Auth::user()->id);
           }
         //   dd($deal_list->machine);
      return view('front.deal_list',compact('deal_list','data','request'));
   }

   // public function deal_details($id){
   //    $deals=Deals::find($id);
   //    $user_id = User::find(Auth::user()->id);
   //    $yourCompanyId = $user_id->company_id;

   //    $feedback=Feedback::where("deal_id",$id)->get();
   //    if(Auth::user()->name){
          
   //       $data = User::find(Auth::user()->id);
   //         }
   //    return view('front.deals_details',compact('deals','data','feedback','yourCompanyId'));

   // }

   //deals details

  public function deal_details($id){
      $deals=Deals::find($id);
      $user_id = User::find(Auth::user()->id);
      $yourCompanyId = $user_id->company_id;
      $feedback=Feedback::where("deal_id",$id)->get();
      if(Auth::user()->name){
          
         $data = User::find(Auth::user()->id);
           }
         //arif delivery message start
         $companyID = Auth::user()->company_id;
      

      $deal_list=Deals::where('merchant_id',$companyID)->orwhere('seller_id',$companyID)->get();
   //   dd($deal_list);
     $request = '';
     if(isset($deal_list)){
       foreach($deal_list as $d){
        
         $deliveryRequest  = DeliveryRequest::where('deal_id',$d->id)->first();
         // dd($deliveryRequest);
         if(empty($deliveryRequest)){
            $request = 'not send';
         }else{
            $request =  'send';
         }
       }
      }
      
      // if(Auth::user()->name){
          
      //    $data = User::find(Auth::user()->id);
      //      }
         //   dd($deal_list->machine);
         //arif delivery message end 
      return view('front.deals_details',compact('deals','data','feedback','yourCompanyId','deal_list','request'));

   }

   public function edit_deals($id){
      $edit_deal=Deals::find($id);
      if(Auth::user()->name){
          
         $data = User::find(Auth::user()->id);
           }
      return view('front.edit_deals',compact('edit_deal','data'));
   }

   public function update_deals(Request $deal, $id){
      $up_deal=Deals::find($id);
      $data = [];
     $key = $deal->spec_title;
     $value = $deal->spec_value;
     $assArr = array_combine($key, $value);

     $checkArr = true;
     foreach ($assArr as $key => $value) {
         if (empty($key) || empty($value) || $value==null) {
             $checkArr = false;
             break;
         }
     }
   
         $jsonArr = json_encode($assArr);
         $data['merchant_id']=$deal->merchant_id;
         $data['seller_id']=$deal->seller_id;
         $data['machine_id']=$deal->machine_id;
         $data['title']=$deal->title;  
         $data['specifications']=$jsonArr;
         $data['budget']=$deal->budget;
         $data['advance_amount']=$deal->advance_amount;
         $data['advance_paid']=$deal->advance_paid;
         $data['deadline']=$deal->deadline;
         $data['quantity']=$deal->quantity;
         $data['quality_related']=$deal->quality_related;
         // $data['status']='pending';
        
         $result =$up_deal->update($data);
         if ($result) {
             return redirect(route('deal_list'));
         }

   }

   public function delete_deals($id){
      $del_deal=Deals::find($id);
      $del_deal->delete();
      return redirect(route('deal_list'));

   }

   public function payment_report($id){
      if(Auth::user()->name){
          
         $data = User::find(Auth::user()->id);
         
           }
         
           $c=Collections::where('deal_id',$id)->first();
         //   dd($c);
            // dd($c->Deals->workorderID->Companies->name);
      return view('front.payment_report',compact('data','c'));
   }

   
   // ali end


   // iman start
  
   
   public function add_machinepost(){

      $category= Category::get();
      $company= Companies::get();
      $machine= Machine::get();
      $users = DB::table('usermachines')
                    ->where([
                     'status' => 'available',
                     'approved' => 'yes',
                    ] )
                    ->get();
         // echo '<pre>';
         // print_r($users);
         
        

       return view('front.timeline',compact('users','machine'));
   }

   public function save_machinepost(Request $order){
     
      $order->validate([
         'company_id'=>'required',
         'category_id'=>'required',
         'machine_id'=>'required',
         'status'=>'required',
         'spec_title'=>'required',
         'spec_value'=>'required',
         'title'=>'required',
         'budget'=>'required',
         'deadline'=>'required',
         'quantity'=>'required',
         'quality_related'=>'required'
         
     ]);
     $data = [];
     $key = $order->spec_title;
     $value = $order->spec_value;
     $assArr = array_combine($key, $value);

     $checkArr = true;
     foreach ($assArr as $key => $value) {
         if (empty($key) || empty($value) || $value==null) {
             $checkArr = false;
             break;
         }
     }
   
         $jsonArr = json_encode($assArr);
         $data['company_id']=$order->company_id;
         $data['category_id']=$order->category_id;
         $data['machine_id']=$order->machine_id;
         $data['title']=$order->title;  
         $data['specifications']=$jsonArr;
         $data['budget']=$order->budget;
         $data['deadline']=$order->deadline;
         $data['quantity']=$order->quantity;
         $data['quality_related']=$order->quality_related;
         $data['status']=$order->status;
        
         $result =workorders::create($data);
         if ($result) {
             return redirect(route('order_list'));
         }
      
     }
   
   // iman end 

   // jahid proposal start

    // propusal 

    function mechinePostDetails($id){
      // $machinePostDetails = Machineposts::find($id);

      $machinePostDetails=Machineposts::where('status','active')->find($id);
      $a= $machinePostDetails->usermachine->machine_id;
      $work_order = Workorders::where('status','active')->get(); 
      if(Auth::user()->name){
          
         $data = User::find(Auth::user()->id);
           }
      return view('front.mechinePostDetails',compact('machinePostDetails','data','work_order','a'));


      // return view('front.mechinePostDetails',compact('machinePostDetails'));
   }
   function workOrderPostDetails($id){
      // $workOrderPostDetails = Workorders::find($id);

      $workOrderPostDetails = Workorders::where('status','active')->find($id);
      // dd($w_details); 
      // $category = Category::where('status','active')->get();
      if(Auth::user()->name){
          
         $data = User::find(Auth::user()->id);
           }
           $machine_id = $workOrderPostDetails->machine_id;
            // dd($machine_id);
         //   $work_order = Workorders::where('category_id',$re)->get();

           $mahinepost= Machineposts::where('status','active')->get();
         //   dd($work_order);
      return view('front.workOrderPostDetails',compact('workOrderPostDetails','data','mahinepost','machine_id'));




      // return view('front.workOrderPostDetails',compact('workOrderPostDetails'));
   }

   function proposalFrom($id,$name){
      
      if($name=='workOrder'){
         $workOrder = Workorders::find($id);
         $machinePost =Machineposts::get();
         // return view('front.proposalFrom',compact('workOrder','machinePost','name'));
      }elseif($name='machine'){
         $machinePost =Machineposts::find($id);
         $workOrder = Workorders::get();
         
      }

      if(Auth::user()->name){
          
         $data = User::find(Auth::user()->id);
           }
      return view('front.proposalFrom',compact('machinePost','workOrder','name','data'));
          
   }
   function savePropusal(request $data){
      // dd($data);
      $data->validate([
         'machinepost_id'=>'required',
         'workorder_id'=>'required',
         'title'=>'required',
         'budget'=>'required',
         'quantity'=>'required',
         'quality_related'=>'required',
         'message'=>'required',
         'deadline'=>'required'
      ]);
      $array =[];
      $userId = Auth::user()->id;
      $array['machinepost_id']= $data->machinepost_id;
      $array['workorder_id']= $data->workorder_id;
      $array['user_id']= $userId;
      $array['title']= $data->title;
      $array['budget']= $data->budget;
      $array['quantity']= $data->quantity;
      $array['quality_related']= $data->quality_related;
      $array['message']= $data->message;
      $array['deadline']= $data->deadline;
      
      $success = Proposal::create($array);
      if($success){
         return redirect(route('index'));
      }


   }

   function proposalList(){
      $userId = Auth::user()->id;
      $data = User::find(Auth::user()->id);
      $proposal = Proposal::where('user_id',$userId)->get();
      return view('front.proposalList',compact('proposal','data'));

   }
   function editProposal($id){
      $data = User::find(Auth::user()->id);
      $proposal = Proposal::find($id);
      // dd($proposal->title);
      
     $workOrderCompany =  $proposal->workorder->company_id;
   
     $machinePostCompany = $proposal->machinepost->usermachines->company_id;
     
      $userID = $proposal->user_id;
      
      $userTable= User::find($userID);
      $compamyID = $userTable->company_id;
      if($compamyID==$machinePostCompany){
         $p = 'machinePost';
         $machinePost =Machineposts::where('id',$proposal->machinepost_id)->first();
         
         $workOrder = Workorders::get();
        
      }elseif($compamyID== $workOrderCompany){
         $p = 'workorderPost';
         $workOrder = Workorders::where('id',$proposal->workorder_id)->first();
         $machinePost =Machineposts::get();
         
         
      }
      
      return view('front.editProposal',compact('proposal','data','p','workOrder','machinePost'));
   }
   function updatePropusal(request $data,$id){
      $proposal = Proposal::find($id);
      $userID = Auth::user()->id;
      $array=[
         'workorder_id'=>$data->workorder_id,
         'machinepost_id '=>$data->machinepost_id,
         'user_id  '=>$userID,
         'title'=>$data->title,
         'budget'=>$data->budget,
         'deadline'=>$data->deadline,
         'quantity'=>$data->quantity,
         'quality_related'=>$data->quality_related,
         'message'=>$data->message,
         
      ];
      $proposal->update($array);
      return redirect(route('proposalList'));
   }
   function deleteProposal(request $data ,$id){
      $proposal = Proposal::find($id);
      $proposal->delete();
      return redirect(route('proposalList'));
   }
   public function Proposal_details($id)
   {
    if(Auth::user()->name){
       $data = User::find(Auth::user()->id);
    }
    $proposalDetails = Proposal::find($id);
    // dd($proposalDetails->User->Companies);
    return view('front.proposal_details',compact('data','proposalDetails'));
   }


   // sabina  front 
   public function add_user()
{

      $data = User::find(Auth::user()->id);
     
    return view('front.add_user',compact('data'));
}

public function save_user(Request $data)
{

   $data->validate([
       
      'name'=>'required',
      'email'=>'required',
      'phone'=>'required',
      'designation'=>'required',
      'photo'=>'required',
      'password'=>'required',
  ]);
   $users = User::get();
   foreach($users as $user){
      if($user->email == $data->email ){
         return redirect(route('add_user'))->with('error','Your email already exist ');
      }
      // dd($user->email);
   }
    $compamyID = Auth::user()->company_id;
    $array=[];
    $array['name']= $data->name;
    $array['email']= $data->email;
    $array['phone']= $data->phone;
    $array['designation']= $data->designation;
    $array['password']= Hash::make($data->password);
    $array['company_id']=$compamyID;
    $photo = $data->file('photo');
if($photo){
    $path = 'photos/profile';
    $fileName = date('YmdHis').'.'.$photo->getClientOriginalExtension();
    $photo->move($path,$fileName);
    $array['photo']= $fileName;

}
User::create($array);
return redirect(route('add_user'))->with('success','Your new user added successfully');



}
function deliveryRequest($id){
   $deal = Deals::find($id);
   // dd($deal->seller_id);
   $merchant_id = $deal->merchant_id;
   $seller_id = $deal->seller_id;
   $request = DeliveryRequest::create([
      'deal_id'=>$id,
      'merchant_id'=>$merchant_id,
      'seller_id'=>$seller_id,
  ]);
  
   $data = User::find(Auth::user()->id);
   return redirect(route('deal_list'));
   // return view('front.deliveryRequest',compact('deal','data'));

}

// sabina end


// inun start 3rd session
public function machinePosts_details($id){
   $d=Machineposts::where('status','active')->find($id);
   $a= $d->usermachine->machine_id;
   $work_order = Workorders::where('status','active')->get(); 
   if(Auth::user()->name){
       
      $data = User::find(Auth::user()->id);
        }
   return view('front.machinePosts_details',compact('d','data','work_order','a'));


  }



  public function front_delete_machinePosts($id){

   $delete_order=Machineposts::find($id);
   // dd( $delete_order);
   $delete_order->delete();
   return redirect(route('dashboard'));

  } 

  function expired_date(){
   
   $date_now = date("Y-m-d");
  

   $deal =Deals::where('deadline','<',$date_now)->get();
  




    if ( $deal ){
    
      return view('front.expired_date',compact('deal'));
    }
   

}
// inun end
// maria 3rd 

//shimo
   
public function Add_feedback($id)
{
   $deal_list=Deals::find($id);
   $user_id = User::find(Auth::user()->id);
   $yourCompanyId = $user_id->company_id;
   $feedbackList=Feedback::where('deal_id',$id)->get();
   if(Auth::user()->name){
       
      $data = User::find(Auth::user()->id);
      }
 return view('front.add_feedback',compact('deal_list','data','yourCompanyId','feedbackList'));  
}

public function Save_feedback(Request $feedback){
     
   $feedback->validate([
       
       'stars'=>'required',
       'message'=>'required'
   ]);
   $deal_id = $feedback->deal_id;
   if($feedback->stars>5){
      return redirect()->back();  
   }else{
      //dd( $feedback->all());
      Feedback::create($feedback->all());
      return redirect(route('deal_details',$deal_id));
   }

   
    
 }
 public function Feedback_list(){
   $user_id = User::find(Auth::user()->id);
   $yourCompanyId = $user_id->company_id;

   $feedbackList=Feedback::where("merchant_id",$yourCompanyId)->orWhere("seller_id",$yourCompanyId)->get();
   // dd($feedbackList);
   if(Auth::user()->name){
        
      $data = User::find(Auth::user()->id);
        }
   return view('front.feedback_list',compact('feedbackList','data'));
   
}

public function feedback_delete($id)
{
 $delete = Feedback::find($id);
 $delete->delete();
 return redirect(route('feedback_list'));
}

function feedback_edit($id)
{
if(Auth::user()->name){
        
   $data = User::find(Auth::user()->id);
  }

 $showFeedback = Feedback::find($id);
 return view('front.feedback_edit',compact('showFeedback','data'));
}

function feedback_update(Request $r,$id)
{   
 $list = Feedback::find($id);
 $list->stars = $r->stars;
 $list->message =$r->message;
 $list->update();
 return redirect(route('feedback_list'));

}
//end shimo

      public function workorder_view()
      {

         if(Auth::user()->name){
            $data = User::find(Auth::user()->id);
            $user = Auth::user()->company_id;
       
            // $machine = Machineposts::get()->where('status','active');
            $machine = Machine::get()->where('status','active')->first();
            // dd($machine);
            $data = User::find(Auth::user()->id);
            $work_order = workorders::get()->where('status','active');
            $workorder=Workorders::where('company_id',$user)->get();
            $workorder_category=Workorders::where('company_id',$user)->get();
            // dd($workorder_category);
            $recent_work_order = workorders::where('status','active')->orderBy('id', 'desc')->get();
            // dd($recent_work_order);


         }
         return view('front.workorder_view',compact('workorder','data','work_order','machine','workorder_category','recent_work_order'));

       
        
      }

      public function machinepost_view()
      {
         if(Auth::user()->name){
            $data = User::find(Auth::user()->id);
            $user = Auth::user()->company_id;
         }

         $machineposts=Machineposts::get();
         $machine_order_recent = machineposts::where('status','active')->orderBy('id', 'desc')->get();
         $workorder_count=Workorders::where('company_id',$user)->get()->count();
         // $work_order = workorders::get()->where('status','active')->orWHere('category_id','1');
         return view('front.machinepost_view',compact('data','machineposts','machine_order_recent','workorder_count','user'));

      }
      

      // public function seller_approval()
      // {
      //    if(Auth::user()->name){
      //    $f = Auth::user()->company_id;
      //    $data = User::find(Auth::user()->id);
      //    }

      //    $delivery_approval = DeliveryRequest::where('merchant_approval','no')->where('seller_approval','no')->where('seller_id',$f)->whereNot('deliveryman_id',Null)->first();
      //    $delivery_approval_yes = DeliveryRequest::where('merchant_approval','no')->where('seller_approval','yes')->where('seller_id',$f)->whereNot('deliveryman_id',Null)->first();
      //    dd($delivery_approval_yes);
      //    $delivery_approval_id = $delivery_approval->id;
      //    dd($delivery_approval_yes);
      //    return view('front.seller_approval',compact('delivery_approval','f','delivery_approval_id','data','delivery_approval_yes'));
      // }

      public function update_seller_approval(Request $r, $id)
      {
         // dd($r);
         $d = DeliveryRequest::find($id);
         $d->update($r->all());

         return back();

      }

      public function milestone_feedback($id)
      {
         // dd($id);
         if(Auth::user()->name){
            $f = Auth::user()->company_id;
            $data = User::find(Auth::user()->id);
            }

            $jobshedule = Jobschedules::where('status','active')->get();

 
            
            // dd($jobshedule);
         return view('front.milestone_feedback',compact('data','jobshedule','f','id'));

      }

      public function add_milestone_feedback(Request $r,$id)
      {


         $r->validate([
            'photo'=>'required',
            'vedio'=>'required',
            'feedback'=>'required',

         ]);



         $data = $r->all();

         if($photo = $r->file('photo')){
            $path= 'photos/jobfiles/';
            $photo_name= md5(rand(100,1000)).'.'.$photo->getClientOriginalExtension();
            $photo->move($path,$photo_name);
            $data['photo'] = $photo_name;
         }

         if($vedio = $r->file('vedio')){
            $vedio_path = 'photos/jobfiles/';
            $vedio_name= md5(rand(100,1000)).'.'.$vedio->getClientOriginalExtension();
            $vedio->move($vedio_path,$vedio_name);
            $data['vedio'] = $vedio_name;
            
         }


         // dd($vedio_name);

         $d = [
            'jobschedule_id' => $r->jobschedule_id,
            'photo' => $photo_name,
            'video' => $vedio_name,
            'feedback' => $r->feedback
         ];
         $jobfile = Jobfiles::create($d);

         


      }

      Public function view_milestone($id)
      {
         $jobshedule = Jobschedules::where('status','active')->get();
         // dd($jobshedule);

         // foreach ($jobshedule as $key => $job) {
         //    // dd($job);
         //    $jobshedule_id= $job->deal_id;
            
         // }

         $deal = Deals::where('status','active')->get();

         foreach ($deal as $key => $d) {
            // dd($job);
            $deal_id= $d->deal_id;
            
         }
         // dd($jobshedule_id);

         if(Auth::user()->name){
        
            $data = User::find(Auth::user()->id);
           }
         
         return view('front.view_milestone',compact('jobshedule','deal','data','deal_id'));

      }

      public function milestone_delete($id)
      {
         $jobshedule = Jobschedules::find($id);
         $jobshedule->delete();
         
      }
      
      public function faq()
      {
         return view('front.faq');
      }

      public function service()
      {
         return view('front.service');
      }

      public function about()
      {
         return view('front.about');
      }
}
