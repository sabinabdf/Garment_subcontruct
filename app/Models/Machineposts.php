<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machineposts extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'usermachine_id', 'number_of_machine', 'status'];
    function usermachines(){
        return $this->belongsTo(Usermachines::class,'usermachine_id','id');
    }

    function deals(){
        return $this->hasMany(Usermachines::class,'id','seller_id');
    }

    function deal(){
        return $this->hasMany(Deals::class,'id','seller_id');
    }
    function usermachine(){
        return $this->belongsTo(Usermachines::class,'usermachine_id','id');
    }

    function proposalID(){
        return $this->hasMany(Proposal::class,'id','machinepost_id');
    }

    function usermachineID(){
        return $this->belongsTo(Usermachines::class,'usermachine_id','id');
    }

  

}
