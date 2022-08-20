<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table='feedbacks';
    protected $fillable=['deal_id','merchant_id','seller_id','stars','message'];
    function marchant(){
        return $this->belongsTo(Workorders::class,'merchant_id','id');
    }
    function seller(){
        return $this->belongsTo(Machineposts::class,'seller_id','id');
    }
    function deal(){
        return $this->belongsTo(Deals::class,'deal_id','id');
    }
    
}
