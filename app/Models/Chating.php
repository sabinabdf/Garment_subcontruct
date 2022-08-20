<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chating extends Model
{
    use HasFactory;
    protected $table = 'chating';
    protected $fillable = [
        'deal_id',
        'merchant_id',
        'seller_id',
        'message',
        'user_id'
    ];
    function deals(){
        return $this->belongsTo(Deals::class,'deal_id','id');
    }
    function merchant(){
        return $this->belongsTo(Companies::class,'merchant_id','id');
    }
    function seller(){
        return $this->belongsTo(Companies::class,'seller_id','id');
    }
    function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
