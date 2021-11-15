<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckDate extends Model
{
    use HasFactory;
    protected $table='check_date';
    protected $fillable=[
        'arrival_date','out_date','resort_id'
    ];
}
