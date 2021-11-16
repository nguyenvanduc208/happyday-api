<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table="resort";
    protected $primaryKey="id";
    protected $fillable = [
        'name','price','limit','size','view','bed','category_id','image_id','desc','created_at','updated_at'
    ];
    public $timestamps = false;

}
