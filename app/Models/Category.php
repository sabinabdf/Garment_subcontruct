<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable=['name','icon'];
     public function machine()
    {
       return $this->hasMany(Machine::class,'id','category_id');
    }
    public function machineID()
    {
       return $this->belongsTo(Category::class,'category_id','id');
    }
    
    function Usermachines(){
        return $this->hasMany(Usermachines::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
     }

     public function WorkOrder()
     {
        return $this->belongsTo(Workorders::class,'machine_id','id');
     }
     function Workorders(){
        return $this->hasMany(Workorders::class,'id','category_id');
    }
 
 

}
