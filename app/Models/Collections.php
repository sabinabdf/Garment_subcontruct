<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collections extends Model
{
    use HasFactory;
    protected $table='collections';
    protected $fillable=['deal_id','amount','collection_date','received_by','status'];
    public function Deals(){
        return $this->belongsTo(Deals::class,'deal_id','id');
    }
}
