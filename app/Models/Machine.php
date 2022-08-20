<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;
    protected $table='machines';
    protected $fillable = ['name','category_id','specifications','brand','photo','status'];
    public function category()
    {
       return $this->belongsTo(Category::class,'category_id','id');
    }

    public function categoryID()
    {
       return $this->hasMany(Category::class,'id','category_id');
    }

    function deals(){
        return $this->hasMany(Deals::class);
    }
    function Workorders(){
        return $this->hasMany(Workorders::class,'id','machine_id');
    }

    function usermachineID(){
        return $this->hasMany(Usermachines::class,'id','machine_id');
    }

    function dealID(){
        return $this->hasMany(Deals::class,'id','machine_id');

    }
    
}
