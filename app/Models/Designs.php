<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designs extends Model
{
    use HasFactory;
    protected $table='designs';
    protected $fillable = ['jobschedule_id','title', 'photo'];
}
