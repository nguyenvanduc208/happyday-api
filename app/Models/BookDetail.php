<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookDetail extends Model
{
    use HasFactory;
    protected $table="booking_detai";
    protected $fillable = [
        'booking_id','resort_id','unit_price'
    ];

    public $timestamp = false;
}
