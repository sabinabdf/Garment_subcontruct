<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawals extends Model
{
    use HasFactory;
    protected $table='withdrawals';
    protected $fillable=['deal_id','amount','posted_by','status','bank_name','payment_date','account_no'];
    public function Deals(){
        return $this->belongsTo(Deals::class,'deal_id','id');
    }

}
