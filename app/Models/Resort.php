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

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function category()
    {
        return $this->belongsTo(Cate::class,'category_id','id');
    }

    public function image()
    {
        return $this->belongsTo(Image::class,'image_id','id');
    }
}
