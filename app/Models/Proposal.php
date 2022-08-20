<?php

namespace App\Models;

use App\Http\Controllers\WorkOrder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    protected $table='proposals';
    protected $fillable=[
    'workorder_id',
    'machinepost_id',
    'user_id',
    'title',
    'budget',
    'deadline',
    'quantity',
    'quality_related',
    'message',
    'take_up',
    'status'
];

function user(){
    return $this->belongsTo(User::class,'user_id','id');
}
function machinePost(){
    return $this->belongsTo(Machineposts::class,'machinepost_id','id');
}
function workorder(){
    return $this->belongsTo(Workorders::class,'workorder_id','id');
}

function dealID(){
    return $this->hasMany(Deals::class,'id','machine_id');
}

}
