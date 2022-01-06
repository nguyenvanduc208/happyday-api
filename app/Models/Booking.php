<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table='booking';
    protected $fillable = [
        'customer_id','resort_id','price','address',
        'number_phone','check_in_date','check_out_date',
        'count_people','status','payment_img'
    ];
}
