<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\CursorPaginator;

use App\Models\Category;
use App\Models\Companies;
use App\Models\Usermachines;
use App\Models\Machineposts;
use App\Models\Workorders;
use App\Models\Machine;
use App\Models\Withdrawals;
use App\Models\Deals;
use App\Models\User;
use App\Models\Proposal;
use App\Models\Collections;
use App\Models\Deliveryman;
use App\Models\DeliveryRequest;
use App\Models\Jobschedules;
use Auth;
use DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function __construct()
    {

        $this->middleware('isAdmin');
    }
    public function Index()
    {
        $count = User::all()->count();
        $collect = DB::table('collections')->where('status','active')->sum('collections.amount');
        $withdraw = DB::table('withdrawals')->where('status','active')->sum('withdrawals.amount');
    // dd($collect);
        $card_collection = Collections::where('status','active')->get();
        
        $card_withdraw = Withdrawals::where('status','active')->get();
        // dd($card_collection);
        // dd($card_withdraw);

        // admin expired date start 
        $date_now = date("Y-m-d");
        // dd($date_now);
     
        $deal =Deals::where('deadline','<',$date_now)->get();
       
        //dd($deal);
     
     
     

        // admin expired date end



        return view('admin.index',compact('card_collection','card_withdraw','collect','withdraw','count','deal'));
    }
    public function Forms()
    {
        return view('admin.forms');
    }
    public function Tables()
    {
        return view('admin.table');
    }
    public function Font_awesome()
    {
        return view('admin.font_awesome');
    }
    public function Login()
    {
        return view('admin.login');
    }
    public function Register()
    {
        return view('admin.register');
    }
    public function Modals()
    {
        return view('admin.modals');
    }

    //Ashiq
    public function Accept_proposal($id)
    {
        $proposal_data = Proposal::find($id);
        if($proposal_data->take_up=='Pending'){
            $proposal_data->take_up = 'Accept';
            $proposal_data->update();
            return response()->json(['success' => $proposal_data->take_up]);
        }elseif($proposal_data->take_up=='Accept'){
            $proposal_data->take_up = 'Rejected';
            $proposal_data->update();
            return response()->json(['success' => $proposal_data->take_up]);
        }elseif($proposal_data->take_up=='Rejected'){
            $proposal_data->take_up = 'Accept';
            $proposal_data->update();
            return response()->json(['success' => $proposal_data->take_up]);
        }
    }

    // sumaiya starts
    public function category_form()
    {

        $list=Category::get();
        return view('admin.add_category',compact('list'));
    }

    
    public function save_category(Request $category)
    {
    
        $data = $category->all();
 
      Category::create($data);
    
    
     return redirect(route('add_cat'));
    }


    public function category_list(){
        $list=Category::get();
    
        return view('admin.category_list',compact('list'));
    }

    function edit_category($id)
        {
            $data = Category::find($id);
            $list = Category::get();
            return view('admin.edit_category',compact('data','list'));

        }

        function update_category(Request $cat,$id)
        {   
            $data = Category::find($id);
            $info=$cat->all();
            $data->update($info);
            return redirect(route('add_cat'));

        }

        public function delete_category($id){
            $data = Category::find($id);
            $data->delete();
            return redirect(route('add_cat'));

        }

   
    // sumaiya end

       // rakib start
       
 function machineListInd($id){
    $data = Usermachines::where('company_id',$id)->get();
    // dd($data);
    return view('admin.machineListInd',compact('data'));

}
function machineDetailsInt($id){
    $userMachine = Usermachines::find($id);
    return view('admin.machineDetailsInt',compact('userMachine'));
}
//    ashiq end

// rakib start
public function machine()
{
    $data = Category::get();
    return view('admin.machine',compact('data'));
}



public function collection($id)
{
    // echo $id;
    return view('admin.collection',compact('id'));
}

public function show_collection(Request $r)
{
    // dd($r);
    $collect = $r->all();
    // dd($collect);
     Collections::create($collect);
    return back();
}

public function list_collection()
{
    $collect = Collections::get();
    return view('admin.list_collection',compact('collect'));
}


       // rakib end

    //shimo start
    
    public function machine_post()
    {
        $machinepost = Machineposts::get();
        return view('admin.machine_post',compact('machinepost'));
    }
    public function delete($id)
    {
        $delete = Machineposts::find($id);
        $delete->delete();
        return redirect(route('machine_post'));
    }

    public function addo_machinepost()
    {
        return view('front.add_machinepost');
    }
    // shimo end


    // ali start
    public function workorder_list(){
        $data=Workorders::get();
        return view('admin.order_list',compact('data'));

    }

    
    public function delete_workorder($id){
        $data=Workorders::find($id);
        $data->delete();
        return redirect(route('order_list'));

    }

    public function admin_edit_workorder($id){

        $edit_workorder=Workorders::find($id);
        $machine= Machine::get();
        $category= Category::get();
    
          return view('admin.edit_workorder',compact('edit_workorder','machine','category'));
    
        }
    
        public function admin_update_workorder(Request $upWorkorder,$id){
    
            $update_workorder=Workorders::find($id);
            $data = [];
            $key = $upWorkorder->spec_title;
            $value = $upWorkorder->spec_value;
            $assArr = array_combine($key, $value);
       
            $checkArr = true;
            foreach ($assArr as $key => $value) {
                if (empty($key) || empty($value) || $value==null) {
                    $checkArr = false;
                    break;
                }
            }
          
                $jsonArr = json_encode($assArr);
                $data['company_id']=$upWorkorder->company_id;
                $data['category_id']=$upWorkorder->category_id;
                $data['machine_id']=$upWorkorder->machine_id;
                $data['title']=$upWorkorder->title;  
                $data['specifications']=$jsonArr;
                $data['budget']=$upWorkorder->budget;
                $data['deadline']=$upWorkorder->deadline;
                $data['quantity']=$upWorkorder->quantity;
                $data['quality_related']=$upWorkorder->quality_related;
                // $data['status']='pending';
               
                $result =$update_workorder->update($data);
                if ($result) {
                    return redirect(route('order_list'));
                }
    
       }

       public function admin_workorder_details($id){
        $w_details=Workorders::find($id);
        return view('admin.workorder_details',compact('w_details'));
       }

       public function Approve_workorder_post($id)
    {
        $approveWorkorder =Workorders::find($id);
        $approveWorkorder->status='active';
        $approveWorkorder->update();
        return redirect(route('order_list'));
    }
    public function Disapprove_workorder_post($id)
    {
        $disApproveWorkorder = Workorders::find($id);
        $disApproveWorkorder->status='inactive';
        $disApproveWorkorder->update();
        return redirect(route('order_list'));
    }

    // ali end 

    //ismail
    public function Machine_post_list()
    {
        $machineposts = Machineposts::get();
        return view('admin/machine_post_list',compact('machineposts'));
    }
    public function Approve_post($id)
    {
        $approvePosts = Machineposts::find($id);
        $approvePosts->status='active';
        $approvePosts->update();
        return redirect(route('post_list'));
    }
    public function Disapprove_post($id)
    {
        $disApprovePosts = Machineposts::find($id);
        $disApprovePosts->status='inactive';
        $disApprovePosts->update();
        return redirect(route('post_list'));
    }
    public function Proposal_list()
    {   
        $proposalList = Proposal::get();
        return view('admin/proposal_list',compact('proposalList'));
    }
    public function Proposal_details($id)
    {
        $proposalDetails = Proposal::find($id);
        return view('admin/proposal_details',compact('proposalDetails'));
    }

    // sabina
    public function Approve_machines($id)
    {
        $approval = Machine::find($id);
        $approval->status='active';
        $approval->update();
        return redirect(route('machine.index'));
    }
    public function Disapprove_machines($id)
    {
        $disApproval = Usermachines::find($id);
        $disApproval->status='inactive';
        $disApproval->update();
        return redirect(route('machine.index'));
    }
// arif user machine start 

    public function approve_usermachine($id)
    {
        $approval = Usermachines::find($id);
        $approval->approved='yes';
        $approval->update();
        return redirect(route('usermachine.index'));
    }
    public function disapprove_usermachine($id)
    {
        $disApproval = Usermachines::find($id);
        $disApproval->approved='no';
        $disApproval->update();
        return redirect(route('usermachine.index'));
    }
    // arif user machine start 

    public function Approve_order($id)
    {
        $approval =Workorders::find($id);
        $approval->status='active';
        $approval->update();
        return redirect(route('order_list'));
    }
    public function Disapprove_order($id)
    {
        $disApproval =  Workorders::find($id);
        $disApproval->status='inactive';
        $disApproval->update();
        return redirect(route('order_list'));
    }


    
//     //withdraw
//     // shimran maria simu
//     public function add_withdraw()
//     {
//         $list=Deals::get();
//         return view('admin.add_withdraw',compact('list'));
//     }
//     public function save_withdraw(Request $withdraw){
        
//         $withdraw->validate([
//             'deal_id'=>'required',
//             'amount'=>'required',
//             'posted_by'=>'required',
//             'payment_date'=>'required',
//             'bank_name'=>'required',
//             'account_no'=>'required'
//         ]);
//         $info=$withdraw->all();
//         Withdrawals::create($info);
//         return redirect(route('withdraw_list'));
//       }
  
  
//       public function withdraw_list(){
//           $list=Withdrawals::get();
//           return view('admin.withdrawals_list',compact('list'));
//       }
//       public function withdraw_delete($id)
//         {
//             $delete = Withdrawals::find($id);
//             $delete->delete();
//             return redirect(route('withdraw_list'));
//         }

//         function withdraw_edit($id)
//         {
//             $list = Withdrawals::find($id);
//             // dd($list->Deals);
//             return view('admin.edit_withdraw',compact('list'));

//         }

//         function withdraw_update(Request $cat,$id)
//         {   
//             $list = Withdrawals::find($id);
//             $info=$cat->all();
//             $list->update($info);
//             return redirect(route('withdraw_list'));

//         }
// // 2nd innings

//         public function withdraw_search(Request $r)
//         {
//             $start_date = $r->start_date;
//             $end_date = $r->end_date;
//             $searchResult = Withdrawals::select("*")
//                         ->whereBetween('payment_date', [$start_date, $end_date])
//                         ->get();
//             return view('admin.search_withdraw',compact('searchResult'));
//         }
        
//     // shimo end




// shomo update shimo new  start 

//withdraw
    // shimran maria simu
    public function add_withdraw()
    { 
        
        $list=Deals::get();
        return view('admin.add_withdraw',compact('list'));
    }
    public function save_withdraw(Request $withdraw){
        
        $withdraw->validate([
            'deal_id'=>'required',
            'amount'=>'required',
            
            'payment_date'=>'required',
            'bank_name'=>'required',
            'account_no'=>'required',
            'status'=>'required'
        ]);
        $info=$withdraw->all();

        $user_id=Auth::user()->name;
        $info['posted_by']=$user_id;
        

        //dd($info);
        Withdrawals::create($info);
        return redirect(route('withdraw_list'));
      }
  
  
      public function withdraw_list(){
          $list=Withdrawals::get();
          return view('admin.withdrawals_list',compact('list'));
      }
      public function withdraw_delete($id)
        {
            $delete = Withdrawals::find($id);
            $delete->delete();
            return redirect(route('withdraw_list'));
        }

        function withdraw_edit($id)
        {
            $list = Withdrawals::find($id);
            // dd($list->Deals);
            return view('admin.edit_withdraw',compact('list'));

        }

        function withdraw_update(Request $cat,$id)
        {   
            $list = Withdrawals::find($id);
            $info=$cat->all();
            $list->update($info);
            return redirect(route('withdraw_list'));

        }
// 2nd innings

        public function withdraw_search(Request $r)
        {
            $start_date = $r->start_date;
            $end_date = $r->end_date;
            $searchResult = Withdrawals::select("*")
                        ->whereBetween('payment_date', [$start_date, $end_date])
                        ->get();
            return view('admin.search_withdraw',compact('searchResult'));
        }
        
    // shimo end
// shomo update shimo new  end
    // jahid
    // deals

    function dealList(){
        $deals = Deals::get();
        return view('admin.dealList',compact('deals'));
    }
    function dealsDetails($id){
        $deals = Deals::find($id);
        return view('admin.dealDetails',compact('deals'));
    }

    // add user sabina

    public function add_user($id)
    {
        return view('admin.add_user', compact('id'));
    }

    public function save_user(Request $data)
    {
        $data->validate([
            'name' => 'required',
            'email' => 'required| string|email|unique:users,email',
            'phone' => 'required |min:8| max:14',
            'photo' => 'required',
            'designation' => 'required',
            'password' => 'required',

        ]);
        $compamyID = Auth::user()->company_id;
        $array = [];
        $array['name'] = $data->name;
        $array['email'] = $data->email;
        $array['phone'] = $data->phone;
        $array['designation'] = $data->designation;
        $array['password'] = Hash::make($data->password);
        $array['company_id'] = $compamyID;
        $photo = $data->file('photo');
        if ($photo) {
            $path = 'photos/profile';
            $fileName = date('YmdHis') . '.' . $photo->getClientOriginalExtension();
            $photo->move($path, $fileName);
            $array['photo'] = $fileName;
        }
        User::create($array);
        return redirect(route('companies.index'));
    }

    // iman start 
    public function available_machinePost()
    {

      
                   
    $users = Usermachines::where(['status' => 'available','approved' => 'yes',])->get();
       
        
      
        return view('admin.available_machinePost',compact('users'));
    }

    public function delete_availableMachinePost($id){
        $data=Usermachines::find($id);
        $data->delete();
        // return redirect(route('order_list'));
        return back();

    }

    function completed_deal(){
        $data = Deals::where('status','completed')->get();
        // dd($data);
        return view('admin.completed_deal',compact('data'));
    
    }
    // iman end 
    
    
   
    public function cash_ledger()
    {   
        $collection = Collections::where('status','active')->get();
        $withdrawal = Withdrawals::where('status','active')->get();
        $company = Companies::get();
        // dd($withdrawal);
        return view('admin.cash_ledger',compact('company','collection','withdrawal'));
    }

    public function cash_ledger_search(Request $r)
    {

        $start = $r->post('start');
        $end = $r->post('end');


        $collection = DB::table('collections')
                    ->where('status','active')
                    ->whereBetween('collection_date',[$start,$end])->get();
         $withdraw = DB::table('withdrawals')
                    ->where('status','active')
                    ->whereBetween('payment_date',[$start,$end])->get();

        dd($withdraw);
        // $collection = Collections::where('status','active')->wherebetween('starting_date',[$start,$end])->get();
        dd($collection);

        echo $start.' '. $end;
    }

    // inunnahar start 
    function expired_dates(){
        // if(Auth::user()->name){
        //    $data = User::find(Auth::user()->id);
        // }
        $date_now = date("Y-m-d");
        // dd($date_now);
     
        $deal =Deals::where('deadline','<',$date_now)->get();
       
        //dd($deal);
     
     
     
         if ( $deal ){
         
           return view('admin.expired_dates',compact('deal'));
         }
        
     
     }

    // inunnahar end

    // arif start 
    public function milestone_list($id)
    {
        // dd($id);


            $deal =  Deals::where('status','active')->orWhere('status','completed')->get();
         $job = Jobschedules::where('status','active')->orWhere('status','completed')->get();
            //   dd($deal);
         $count = Jobschedules::get()->count();
         $count_complete = Jobschedules::where('status','completed')->get()->count();
         // dd($count_complete);

         return view('admin.milestone_list',compact('job','count','count_complete','deal','id'));
    }

    Public function delivery()
    {
        return view('admin.delivery');
    }

    public function store_delivery(Request $delivery)
    {
        $delivery->validate([
            'name'=>'required',
            'phone'=>'required',
            
            'photo'=>'required',
            'status'=>'required'
        ]);
       $data = $delivery->all();

       if($photo= $delivery->file('photo')){
        $path = "photos/delivery/";
        $pname = md5(rand(100,1000)).'.'.$photo->getClientOriginalExtension();
        $photo->move($path,$pname);
        $data['photo'] = $pname;
    }
    Deliveryman::create($data);
    return redirect(route('view_delivery'))->with('status','Delivery man added succeesfully');
    }

    public function view_delivery()
    {
        $delivery = Deliveryman::get();
        return view('admin.delivery_list',compact('delivery'));
    }
    
    public function delete_delivery($id)
    {
        $delivery = Deliveryman::find($id);
        $delivery->delete();
       return redirect(route('view_delivery'))->with('info','Delivery man deleted succeesfully');
    }

    public function edit_delivery($id)
    {
        $delivery = Deliveryman::find($id);
        
       return view('admin.delivery_edit',compact('delivery'));
    }
    
    public function update_delivery(Request $r ,$id)
    {
        // dd($id);
        $r->validate([
            'name'=>'required',
            'phone'=>'required|min:6|max:17',
            
            'photo'=>'required',
            'status'=>'required'
        ]);
        $delivery = Deliveryman::find($id);
        $data =$r->all();
        if($photo= $r->file('photo')){
            $path = "photos/delivery/";
            $pname = md5(rand(100,1000)).'.'.$photo->getClientOriginalExtension();
            $photo->move($path,$pname);
            $data['photo'] = $pname;
       
    }
    $delivery->update($data);
        
    return redirect(route('view_delivery'))->with('update','Delivery man updated succeesfully');
    }

    public function deliveryman_list()
    {
        $deliveryrequest = DeliveryRequest::get();
        return view('admin.deliveryRequest_list',compact('deliveryrequest'));
    }

    public function add_deliveryman($id)
    {
        // dd($id);

        $deliveryrequest = DeliveryRequest::find($id);
        $delivery_man = Deliveryman::where('status','active')->get();
        // dd($deliveryrequest);
        return view('admin.add_deliveryman',compact('id','deliveryrequest','delivery_man'));
    }
    
    public function update_deal(Request $r,$id)
    {
        $r->validate([
            'deliveryman_id'=>'required',

        ]);

        // dd($r);
        $deliveryrequest = DeliveryRequest::find($id);
        $deliveryrequest->update($r->all());
        return redirect(route('deliveryman_list'))->with('update','Delivery man updated succeesfully');
        
    }

    public function saveToken(Request $r)
    {
    //    echo "ok";
    //  $data = Companies::
    return $r->post();
    }
    

    public function pending_company(Request $r,$id)
    {
        // echo $id;
            $data = Companies::find($id);
            // dd($data->status);
            $data['status'] = $data->status;
            $data->update();


            $company = Companies::find($id);
        if($proposal_data->status=='Pending'){
            $proposal_data->take_up = 'Accept';
            $proposal_data->update();
            return response()->json(['success' => $proposal_data->take_up]);
        }elseif($proposal_data->take_up=='Accept'){
            $proposal_data->take_up = 'Rejected';
            $proposal_data->update();
            return response()->json(['success' => $proposal_data->take_up]);
        }elseif($proposal_data->take_up=='Rejected'){
            $proposal_data->take_up = 'Accept';
            $proposal_data->update();
            return response()->json(['success' => $proposal_data->take_up]);
        }
    }

    public function view_user()
    {
        $data = User::get();
        // dd($info);
        return view('admin.view_user',compact('data'));
    }

    public function user_delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect(route('view_user'))->with('delete','Your user deleted successfully');
    }

    public function user_edit($id)
    {
        // dd($id);
        $data = User::find($id);
        return view('admin.user_edit',compact('id','data'));

    }

    public function store_user(Request $r ,$id)
    {
        $r->validate([
            'name' => 'required',
            'email' => 'required| string|email|',
            'phone' => 'required|max:14',
            'photo' => 'required',
            'designation' => 'required',
            // 'password' => 'required|min:8',
        ]);
        // dd($id);
        $data = $r->all();
        if($photo= $r->file('photo')){
            $path = "photos/user/";
            $pname = md5(rand(100,1000)).'.'.$photo->getClientOriginalExtension();
            $photo->move($path,$pname);
            $data['photo'] = $pname;
       
    }
        // dd($data);
        $d = User::find($id);
        $d->update($data);
        return redirect(route('view_user'))->with('status','Your user updated successfully');

    }

    public function user_detail($id)
    {
        // echo "ok";
        $user = User::find($id);
        return view('admin.user_detail',compact('user'));
    }

    public function machine_post_edit($id)
    {
        // dd($id);
        // echo "ok";
        $machinepost = Machineposts::find($id);
        // dd($machinepost);
        return view('admin.machine_post_edit',compact('machinepost'));
    }

    public function machine_post_update(Request $r,$id)
    {

        $machinepost = Machineposts::find($id);
        $machinepost->update($r->all());
        // dd($machinepost);
        return redirect(route('machine_post'))->with('status','Your machine updated successfully');

    }

    public function machine_post_view($id)
    {
        // dd($id);
        $machinepost = Machineposts::find($id);

        // dd($machinepost);
        return view('admin.machine_post_view',compact('machinepost'));

    }
}