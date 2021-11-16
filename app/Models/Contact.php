<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = "contact";
    protected $primaryKey = "id";
    protected $fillable = [
        'address', 'email', 'number_phone'
    ];
    public $timestamps = false;
}
