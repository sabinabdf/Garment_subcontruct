<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Enums\ServerStatus;
use Illuminate\Database\Eloquent\Model;

class Usermachines extends Model
{
    use HasFactory;
    protected $table = 'usermachines';
    protected $fillable =[
        'company_id',
        'category_id',
        'machine_id',
        'title',
        'specifications',
        'number_of_machine',
        'purchase_date',
        'photo',
        'number_of_available',
        'brand',
        'status'
    ];
  
    function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    function machine(){
        return $this->belongsTo(Machine::class,'machine_id','id');
    }
    function company(){
        return $this->belongsTo(Companies::class,'company_id','id');
    }
    function machinePost(){
        return $this->hasMany(Machineposts::class,'id','usermachine_id ');
    }

    function companyName(){
        return $this->belongsTo(Companies::class,'company_id','id');
    }

    function dealID(){
        return $this->hasMany(Deals::class,'id','machine_id');
    }
    


    //error inun

    function Machineposts(){
        return $this->hasMany(Machineposts::class,'id','usermachine_id ');
    }
    
    function Workorders(){
        return $this->hasMany(Workorders::class,'id','usermachine_id ');
    }
     
    function Usermachines(){
        return $this->hasMany(Usermachines::class,'id','usermachine_id ');
    }
}
