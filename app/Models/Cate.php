<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    use HasFactory;
    protected $table="category";
    protected $primaryKey="id";
    protected $fillable=[
        'name'
    ];
    public $timesptamps =false;
    public function Post(){
        return $this ->hasMany(Post::class,'name','id');
    }
}
