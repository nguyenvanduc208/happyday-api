<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = "food";
    protected $primaryKey = "id";
    protected $fillable = [
        'image', 'title', 'price', 'category_id'
    ];

    public $timestamps = false;

    // public function Category(){
    //     return $this->belongsTo()
    // }
}
