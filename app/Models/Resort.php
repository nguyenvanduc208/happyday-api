<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resort extends Model
{
    use HasFactory;
    protected $table ='resort';
    protected $fillable = [
        'name',
        'price',
        'limit',
        'size',
        'view',
        'bed',
        'view',
        'category_id',
        'image_id',
        'desc',
        
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
 
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
