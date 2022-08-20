<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deliveryman extends Model
{
    use HasFactory;
    protected $table = 'deliverymans';
    protected $fillable = ['name','phone','photo','status'];

    public function deliveryreuestID()
    {
        return $this->hasMany(DeliveryRequest::class,'id','deliveryman_id');
    }
}
