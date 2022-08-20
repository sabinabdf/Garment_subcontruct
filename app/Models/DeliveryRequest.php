<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryRequest extends Model
{
    use HasFactory;
    protected $table = 'deliveryrequests';
    protected $fillable =[
        'deal_id',
        'merchant_id',
        'seller_id',
        'merchant_approval',
        'seller_approval',
        'deliveryman_id',
        'status'
    ];

    public function deals()
    {
        return $this->belongsTo(Deals::class,'deal_id','id');
    }

    public function marchant()
    {
        return $this->belongsTo(Companies::class,'merchant_id','id');
    }

    public function seller()
    {
        return $this->belongsTo(Companies::class,'seller_id','id');
    }

    public function deliveryman()
    {
        return $this->belongsTO(Deliveryman::class,'deliveryman_id','id');
    }
}
