<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deals extends Model
{
    use HasFactory;
    protected $table='deals';
    protected $fillable=['merchant_id','seller_id','machine_id','title','specifications','budget','advance_amount','advance_paid','deadline','quantity','quality_related','status'];
    
    public function Withdrawals(){
        return $this->hasMany(Withdrawals::class,'id','deal_id');
    }
    function marchant(){
        return $this->belongsTo(Companies::class,'merchant_id','id');
    }
    function seller(){
        return $this->belongsTo(Companies::class,'seller_id','id');
    }
    function machine(){
        return $this->belongsTo(Usermachines::class,'machine_id','id');
    }

    function workorderID(){
        return $this->belongsTo(workorders::class,'merchant_id','id');
    }

    function machinepostID(){
        return $this->belongsTo(Machineposts::class,'seller_id','id');
    }
    function sellerID(){
        return $this->belongsTo(Companies::class,'seller_id','id');
    }

    function usermachineID(){
        return $this->belongsTo(Usermachines::class,'machine_id','id');
    }

    function machineID(){
        return $this->belongsTo(Machine::class,'machine_id','id');
    }

    function proposalID(){
        return $this->belongsTo(Proposal::class,'machine_id','id');
    }

    function feedback(){
        return $this->hasMany(Feedback::class,'id','deal_id');
    }

    public function collection(){
        return $this->hasMany(Collections::class,'id','deal_id');
    }

    function company(){
        return $this->belongsTo(Companies::class,'merchant_id','id');
    }
// jahid msg
    function chating(){
        return $this->hasMany(Chating::class,'id','deal_id');
    }

    public function deliveryrequestID()
    {
        return $this->hasMany(DeliveryRequest::class,'id','deal_id');
    }

    public function Jobschedule()
    {
        return $this->hasMany(Jobschedules::class,'id','deal_id');
    }

}