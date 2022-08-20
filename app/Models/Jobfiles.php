<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobfiles extends Model
{
    use HasFactory;
    protected $table='jobfiles';
    protected $fillable = ['jobschedule_id', 'photo', 'video', 'feedback'];

    public function jobschedule()
    {
        return $this->belongsTo(Jobschedules::class,'jobschedule_id','id');
    }
}
