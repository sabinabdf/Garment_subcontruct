<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Front;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UsermachineController;


// Route::get('/usermachine_edit/{id}',[AdminController::class,'usermachine_edit'])->name('usermachine_edit');
// Route::get('/usermachine_view/{id}',[AdminController::class,'usermachine_view'])->name('usermachine_view');
// Route::get('/usermachine_delete/{id}',[AdminController::class,'usermachine_delete'])->name('usermachine_view');


Route::group(['prefix'=>'admin'],function(){
	Route::resource('/machine',MachineController::class);
    
	Route::resource('/companies',CompanyController::class);
	Route::resource('/usermachine',UsermachineController::class);

	Route::get('/post_list',[AdminController::class,'Machine_post_list'])->name('post_list');
	Route::get('/machine_post_edit/{id}',[AdminController::class,'machine_post_edit'])->name('machine_post_edit');
	Route::put('/machine_post_update/{id}',[AdminController::class,'machine_post_update'])->name('machine_post_update');
	Route::get('/machine_post_view/{id}',[AdminController::class,'machine_post_view'])->name('machine_post_view');
	Route::get('/approve_post/{id}',[AdminController::class,'Approve_post'])->name('approve_post');


	Route::get('/disapprove_post/{id}',[AdminController::class,'Disapprove_post'])->name('disapprove_post');

	Route::get('/proposal_list',[AdminController::class,'Proposal_list'])->name('proposal_list');
	Route::get('admin/proposal_details/{id}',[AdminController::class,'Proposal_details'])->name('admin/proposal_details');

	// rakib 
	Route::get('/collection/{id}',[AdminController::class,'collection'])->name('collection');
	Route::post('/show_collection',[AdminController::class,'show_collection'])->name('show_collection');
	Route::get('/list_collection',[AdminController::class,'list_collection'])->name('list_collection');  
	Route::get('/deal_collection_ledger/{id}',[Front::class,'deal_collection_ledger'])->name('deal_collection_ledger');  
	Route::get('/',[AdminController::class,'Index'])->name('admin');
});

//Ashiq
Route::put('admin/accept_proposal/{id}',[AdminController::class,'Accept_proposal'])->name('accept_proposal');
// sabina
Route::get('/dashboard/add_milestone/{id}',[Front::class,'add_milestone'])->name('add_milestone')->middleware('auth');
Route::get('/admin/milestone_list/{id}',[AdminController::class,'milestone_list'])->name('milestone_list')->middleware('auth');
Route::delete('admin/delete_milestone/{id}',[Front::class,'delete_milestone'])->name('delete_milestone')->middleware('auth');
Route::get('/admin/approve_workorder_post/{id}',[AdminController::class,'Approve_workorder_post'])->name('approve_workorder_post');
Route::get('/admin/disapprove_workorder_post/{id}',[AdminController::class,'Disapprove_workorder_post'])->name('disapprove_workorder_post');
Route::get('/admin/workorder_details/{id}', [AdminController::class,'admin_workorder_details'])->name('admin_workorder_details');
Route::put('/admin/update_workorder/{id}', [AdminController::class,'admin_update_workorder'])->name('admin_update_workorder');
Route::get('/admin/edit_workorder/{id}', [AdminController::class,'admin_edit_workorder'])->name('admin_edit_workorder');
Route::get('/proposalFrom/{id}/{name}',[Front::class,'proposalFrom'])->name('proposalFrom');

Route::get('/approve_machines/{id}',[AdminController::class,'Approve_machines'])->name('approve_machines');
Route::get('/disapprove_machines/{id}',[AdminController::class,'Disapprove_machines'])->name('disapprove_machines');

// arif usermachine start 

Route::get('/approve_usermachine/{id}',[AdminController::class,'approve_usermachine'])->name('approve_usermachine');
Route::get('/disapprove_usermachine/{id}',[AdminController::class,'disapprove_usermachine'])->name('disapprove_usermachine');
// arif usermachine end

Route::get('/approve_order/{id}',[AdminController::class,'Approve_order'])->name('approve_order');
Route::get('/disapprove_order/{id}',[AdminController::class,'Disapprove_order'])->name('disapprove_order');



Route::put('/update_category/{id}',[AdminController::class,'update_category'])->name('up_cat');
Route::get('/edit_category/{id}',[AdminController::class,'edit_category'])->name('edit_cat');
Route::delete('/delete_category/{id}',[AdminController::class,'delete_category'])->name('delete_cat');



Route::post('/dashboard/store_milestone/{id}',[Front::class,'store_milestone'])->name('store_milestone')->middleware('auth');
Route::get('/dashboard/progress_milestone/{id}',[Front::class,'progress_milestone'])->name('progress_milestone')->middleware('auth');
Route::get('/dashboard/edit_milestone/{id}',[Front::class,'edit_milestone'])->name('edit_milestone')->middleware('auth');
Route::post('/dashboard/update_milestone/{id}',[Front::class,'update_milestone'])->name('update_milestone')->middleware('auth');
Route::get('/dashboard/milestone_view/{id}',[Front::class,'milestone_view'])->name('milestone_view')->middleware('auth');

Route::get('/machineListInd/{id}',[AdminController::class,'machineListInd'])->name('machineListInd');
Route::get('/machineDetailsInt/{id}',[AdminController::class,'machineDetailsInt'])->name('machineDetailsInt');


Route::put('/pending_company/{id}',[AdminController::class,'pending_company'])->name('pending_company');
// rakib end
Route::delete('/delete/{id}',[AdminController::class,'delete'])->name('delete');
Route::put('/withdraw_update/{id}',[AdminController::class,'withdraw_update'])->name('withdraw_update');
Route::get('/withdraw_edit/{id}',[AdminController::class,'withdraw_edit'])->name('withdraw_edit');
Route::delete('/withdraw_delete/{id}',[AdminController::class,'withdraw_delete'])->name('withdraw_delete');


Route::get('/payment_report/{id}', [Front::class,'payment_report'])->name('payment_report');
Route::get('/think_proposal/{id}', [Front::class,'think_proposal'])->name('think_proposal');
Route::delete('/delete_deals/{id}', [Front::class,'delete_deals'])->name('delete_deals');
Route::put('/update_deals/{id}', [Front::class,'update_deals'])->name('update_deals');
Route::get('/edit_deals/{id}', [Front::class,'edit_deals'])->name('edit_deals');
Route::get('/deal_details/{id}', [Front::class,'deal_details'])->name('deal_details');
Route::delete('/delete_workorder/{id}', [Front::class,'front_delete_workorder'])->name('delete_workorder');
Route::get('/workorder_details/{id}', [Front::class,'workorder_details'])->name('order_details');
Route::put('/update_workorder/{id}', [Front::class,'update_workorder'])->name('update_workorder');
Route::get('/edit_workorder/{id}', [Front::class,'edit_workorder'])->name('edit_workorder');
Route::delete('/delete_order/{id}', [AdminController::class,'delete_workorder'])->name('del_order');

Route::delete('/delete_machinePosts/{id}', [Front::class,'front_delete_machinePosts'])->name('delete_machinePosts');
Route::put('/update_status/{id}', [App\Http\Controllers\MachinePostStatus::class,'update_status'])->name('update_status');
Route::put('/edit_profile/{id}',[Front::class,'edit_profile'])->name('edit_profile')->middleware('auth');
Route::delete('/delete_availableMachinePost/{id}', [AdminController::class,'delete_availableMachinePost'])->name('delete_availableMachinePost');
Route::get('/edit_status/{id}', [App\Http\Controllers\MachinePostStatus::class, 'edit_status'])->name('edit_status');
// error inun ka bacchi
// Route::get('/machinePosts_details/{id}', [App\Http\Controllers\MatchedPost::class,'machinePosts_details'])->name('machinePosts_details');
Route::get('/machinePosts_details/{id}', [App\Http\Controllers\Front::class,'machinePosts_details'])->name('machinePosts_details');
Route::get('/dealsDetails/{id}', [AdminController::class,'dealsDetails'])->name('dealsDetails');
// 3rd session 
Route::get('/dealOverview/{id}',[Front::class,'dealOverview'])->name('dealOverview'); 

// message

Route::get('/chating/{id}',[Front::class,'chating'])->name('chating'); 
Route::get('/add_user/{id}',[AdminController::class,'add_user'])->name('add_userAdmin');
Route::delete('admin/user_delete/{id}',[AdminController::class,'user_delete'])->name('user_delete')->middleware('auth');
Route::get('admin/user_edit/{id}',[AdminController::class,'user_edit'])->name('user_edit')->middleware('auth');
Route::put('admin/store_user/{id}',[AdminController::class,'store_user'])->name('store_user')->middleware('auth');
Route::get('/view_timeline/{id}', [Front::class,'view_timeline'])->name('view_timeline')->middleware('auth');
 // sumaiya starts 
Route::get('/show_companyList/{id}', [App\Http\Controllers\Front::class, 'show_companyList'])->name('show_companyList');

Route::get('/deliveryRequest/{id}',[Front::class,'deliveryRequest'])->name('deliveryRequest');
Route::get('/go_timeline/{id}', [Front::class,'go_timeline'])->name('go_timeline');
Route::get('/visit/{id}', [App\Http\Controllers\Front::class, 'show_company_profile'])->name('show_company_profile');
Route::get('/visit_login/{id}', [App\Http\Controllers\Front::class, 'show_company_profile_login'])->name('show_company_profile_login')->middleware('auth');

Route::get('/getMachine/{id}', [Front::class,'getMachine']);
Route::get('/editUserMachine/{id}', [Front::class,'editUserMachine'])->name('editUserMachine');
Route::delete('/deleteUserMachine/{id}', [Front::class,'deleteUserMachine'])->name('deleteUserMachine');
Route::put('/updateUserMachine/{id}', [Front::class,'updateUserMachine'])->name('updateUserMachine');
Route::get('/machineDetails/{id}', [Front::class,'machineDetails'])->name('machineDetails');

// post details demo
Route::get('/mechinePostDetails/{id}',[Front::class,'mechinePostDetails'])->name('mechinePostDetails');
Route::get('/workOrderPostDetails/{id}',[Front::class,'workOrderPostDetails'])->name('workOrderPostDetails');
Route::get('/editProposal/{id}',[Front::class,'editProposal'])->name('editProposal');
Route::put('/updatePropusal/{id}',[Front::class,'updatePropusal'])->name('updatePropusal');
Route::delete('/deleteProposal/{id}',[Front::class,'deleteProposal'])->name('deleteProposal');
Route::get('proposal_details/{id}',[Front::class,'Proposal_details'])->name('proposal_details');

Route::put('/update_show/{id}', [App\Http\Controllers\UserMachine::class,'update_show'])->name('update_show');
Route::get('/edit_show/{id}', [App\Http\Controllers\UserMachine::class, 'edit_show'])->name('edit_show');
Route::prefix('admin')->middleware('auth')->group(function(){

 Route::get('/modals',[AdminController::class,'Modals'])->name('admin/modals');
 Route::get('/font_awesome',[AdminController::class,'Font_awesome'])->name('admin/font_awesome');
 Route::get('/register',[AdminController::class,'Register'])->name('admin/register');
 Route::get('/login',[AdminController::class,'Login'])->name('admin/login');
 Route::get('/tables',[AdminController::class,'Tables'])->name('admin/tables');
 Route::get('/forms',[AdminController::class,'Forms'])->name('admin/forms');

 // sumaiya starts 

Route::get('/category_list',[AdminController::class,'category_list'])->name('cat_list');
Route::get('/add_category',[AdminController::class,'category_form'])->name('add_cat');
Route::post('/save_category',[AdminController::class,'save_category'])->name('save_cat');

//3rd inings

 // sumaiya end 
 // rakib start delete for resource 

// shimo start

Route::get('/addo_machinepost',[AdminController::class,'addo_machinepost'])->name('addo_machinepost')->middleware('auth');
Route::get('/machine_post',[AdminController::class,'machine_post'])->name('machine_post');

// shimaran
//withdraw
//feedback
Route::put('/feedback_update/{id}',[Front::class,'feedback_update'])->name('feedback_update');
Route::get('/feedback_edit/{id}',[Front::class,'feedback_edit'])->name('feedback_edit');
Route::delete('/feedback_delete/{id}',[Front::class,'feedback_delete'])->name('feedback_delete');
Route::get('/feedback_list',[Front::class,'Feedback_list'])->name('feedback_list');
Route::post('/save_feedback',[Front::class,'Save_feedback'])->name('save_feedback');
Route::get('/add_feedback/{id}',[Front::class,'Add_feedback'])->name('add_feedback');
Route::get('/withdraw_list',[AdminController::class,'withdraw_list'])->name('withdraw_list');
Route::post('/save_withdraw',[AdminController::class,'save_withdraw'])->name('save_withdraw');
Route::get('/add_withdraw',[AdminController::class,'add_withdraw'])->name('add_withdraw');

Route::post('/withdraw_search',[AdminController::class,'withdraw_search'])->name('withdraw_search');


//shimo end



// ali start
// Front area

Route::get('/deal_list', [Front::class,'deal_list'])->name('deal_list');
Route::post('/accept_deal', [Front::class,'accept_deal'])->name('accept_deal');



Route::post('/save_order', [Front::class,'save_workorder'])->name('save_order');
Route::get('/order', [Front::class,'add_workorder'])->name('order')->middleware('auth');

// Back Area 



Route::get('/order_list', [AdminController::class,'workorder_list'])->name('order_list');
// ali end

// jahid
Route::get('/dealList', [AdminController::class,'dealList'])->name('dealList');




// user add Sabina

Route::post('/save_userAdmin',[AdminController::class,'save_user'])->name('save_userAdmin');




});



// sabina start

Route::get('/dashboard',[Front::class,'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/profile',[Front::class,'profile'])->name('profile')->middleware('auth');
Route::get('/c_pass',[Front::class,'c_pass'])->name('c_pass')->middleware('auth');
Route::post('/change_pass/{id}',[Front::class,'change_pass'])->name('change_pass');
// 2nd innings
Route::get('/add_user',[Front::class,'add_user'])->name('add_user')->middleware('auth');
Route::post('/save_user',[Front::class,'save_user'])->name('save_user')->middleware('auth');
Route::get('admin/view_user',[AdminController::class,'view_user'])->name('view_user')->middleware('auth');
Route::get('admin/user_detail/{id}',[AdminController::class,'user_detail'])->name('user_detail')->middleware('auth');
// delivary request



// sabina end



//Front site





Route::get('/signup', [Front::class,'signup'])->name('signup');
//timeline
Route::get('/timeline', [Front::class,'timeline'])->name('timeline')->middleware('auth');




Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// sumaiya END




// ashiq start
Route::get('/company_profile', [App\Http\Controllers\Front::class, 'company_profile'])->name('company_profile');



// ashiq end

// jahid
// usermachine form
Route::get('/userMacines', [Front::class,'userMacines'])->name('userMacines')->middleware('auth');
Route::post('/saveUserMachine', [Front::class,'saveUserMachine'])->name('saveUserMachine');


// user machine table
Route::get('/getUserMachine', [Front::class,'getUserMachine'])->name('getUserMachine');


// end demo

// propusal

Route::post('/savePropusal',[Front::class,'savePropusal'])->name('savePropusal');
Route::get('/proposalList',[Front::class,'proposalList'])->name('proposalList');






// inonnahar
Route::get('/machine_show', [App\Http\Controllers\UserMachine::class, 'machine_show'])->name('userMachine_show');





Route::get('/add_userMachine', [App\Http\Controllers\UserMachine::class, 'add'])->name('add_userMachine');
Route::get('/userMachine', [App\Http\Controllers\UserMachine::class, 'index'])->name('userMachine');
Route::get('/userMachineTwo', [App\Http\Controllers\UserMachine::class, 'indexTwo'])->name('userMachineTwo');



//workOrder
Route::get('/workOrder', [App\Http\Controllers\WorkOrder::class, 'index'])->name('workOrder');


// ali start
// Route::get('/edit_order/{id}', [Front::class,'edit_workorder'])->name('edit_order');

// ali end


// iman start
Route::get('/admin/available_machinePost',[AdminController::class,'available_machinePost'])->name('available_machinePost');
// Route::get('/order_list', [AdminController::class,'machinepost_list'])->name('machinepost_list');

// Route::get('/edit_order/{id}', [Front::class,'edit_workorder'])->name('edit_order');
Route::post('/save_machinepost', [Front::class,'save_machinepost'])->name('save_machinepost');
Route::get('/machinepost', [Front::class,'add_machinepost'])->name('machinepost');

//3rd session
Route::get('/admin/completed_deal',[AdminController::class,"completed_deal"])->name('completed_deal');
// iman end



// inunnahar
//machine status Routes


Route::get('/machine_status', [App\Http\Controllers\MachinePostStatus::class, 'machine_status'])->name('machine_status');

// delete matchpost start

// Route::get('/matchedPost', [App\Http\Controllers\MatchedPost::class, 'matchedPost'])->name('matchedPost');
// Route::get('/matchedMachinePost', [App\Http\Controllers\MatchedPost::class, 'matchedMachinePost'])->name('matchedMachinePost');
// delete matchpost end

//matchpost new start
Route::get('/dashboard',[Front::class,'dashboard'])->name('dashboard')->middleware('auth');

//matchpost new end

// expired deadline 
Route::get('/expired_date', [App\Http\Controllers\Front::class, 'expired_date'])->name('expired_date')->middleware('auth');
Route::get('/admin/expired_dates', [App\Http\Controllers\AdminController::class, 'expired_dates'])->name('expired_dates')->middleware('auth');

// Route::get('/workorder_details/{id}', [App\Http\Controllers\MatchedPost::class,'workorder_details'])->name('order_details');


// arif start
Route::get('/admin/cash_ledger',[AdminController::class,'cash_ledger'])->name('cash_ledger');
Route::post('/admin/cash_ledger_search',[AdminController::class,'cash_ledger_search'])->name('cash_ledger_search');
Route::get('/all_post',[Front::class,'all_post'])->name('all_post');
Route::get('/all_category',[Front::class,'all_category'])->name('all_category');
Route::get('/contact',[Front::class,'contact'])->name('contact');

// arif end
Route::post('/sendMessage',[Front::class,'sendMessage']);
Route::get('/dashboard/workorder_view',[Front::class,'workorder_view'])->name('workorder_view');
Route::get('/dashboard/machinepost_view',[Front::class,'machinepost_view'])->name('machinepost_view');

Route::get('', [Front::class,'index'])->name('index');

// delivery rakib
Route::get('/admin/delivery',[AdminController::class,'delivery'])->name('delivery')->middleware('auth');
Route::post('/admin/store_delivery',[AdminController::class,'store_delivery'])->name('store_delivery');
Route::get('/admin/view_delivery',[AdminController::class,'view_delivery'])->name('view_delivery');
Route::delete('/admin/delete_delivery/{id}',[AdminController::class,'delete_delivery'])->name('delete_delivery');
Route::get('/admin/edit_delivery/{id}',[AdminController::class,'edit_delivery'])->name('edit_delivery');
Route::post('/admin/update_delivery/{id}',[AdminController::class,'update_delivery'])->name('update_delivery');
Route::get('/admin/deliveryman_list',[AdminController::class,'deliveryman_list'])->name('deliveryman_list');
Route::get('/admin/add_deliveryman/{id}',[AdminController::class,'add_deliveryman'])->name('add_deliveryman');
Route::put('/admin/update_deal/{id}',[AdminController::class,'update_deal'])->name('update_deal');
Route::get('/front/seller_approval/',[Front::class,'seller_approval'])->name('seller_approval')->middleware('auth');
Route::put('/front/update_seller_approval/{id}',[Front::class,'update_seller_approval'])->name('update_seller_approval')->middleware('auth');
Route::get('/front/milestone_feedback/{id}',[Front::class,'milestone_feedback'])->name('milestone_feedback')->middleware('auth');
Route::post('/front/add_milestone_feedback/{id}',[Front::class,'add_milestone_feedback'])->name('add_milestone_feedback')->middleware('auth');
Route::get('/front/view_milestone/{id}',[Front::class,'view_milestone'])->name('view_milestone')->middleware('auth');
Route::get('/front/milestone_delete/{id}',[Front::class,'milestone_delete'])->name('milestone_delete')->middleware('auth');
Route::get('/front/milestone_details/{id}',[Front::class,'milestone_details'])->name('milestone_details')->middleware('auth');

// ajax 
//web.php
Route::post('/saveToken', [AdminController::class, 'saveToken'])->name('saveToken');

// not need auth 
Route::get('/front/faq',[Front::class,'faq'])->name('faq');
Route::get('/front/service',[Front::class,'service'])->name('service');
Route::get('/front/about',[Front::class,'about'])->name('about');

