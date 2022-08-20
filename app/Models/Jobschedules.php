<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobschedules extends Model
{
    use HasFactory;
    protected $table='jobschedules';
    protected $fillable = ['deal_id', 'title', 'description', 'start_date', 'end_date', 'feedback'];

    public function Deals()
    {
        return $this->belongsTo(Deals::class,'deal_id','id');
    } 

    public function jobsheduleID()
    {
        return $this->hasMany(Deals::class,'id','jobschedule_id');
    } 



}
