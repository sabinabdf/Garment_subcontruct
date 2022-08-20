<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workorders extends Model
{
    use HasFactory;
    protected $fillable = ['company_id', 'category_id', 'machine_id', 'title', 'specifications', 'budget', 'deadline', 'quantity', 'quality_related', 'status'];
    
    function Categories(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    function Companies(){
        return $this->belongsTo(Companies::class,'company_id','id');
    }
    function Machines(){
        return $this->belongsTo(Machine::class,'machine_id','id');
    }
    function deals(){
        return $this->hasMany(Deals::class,'id','merchant_id');
    }

    // error inun
    function Category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
 
    function Machine(){
        return $this->belongsTo(Machine::class,'machine_id','id');
    }

    function proposalID(){
        return $this->hasMany(Proposal::class,'id','workorder_id');
    }
    
}
