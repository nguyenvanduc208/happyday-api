<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $table = "restaurant";
    protected $primaryKey = "id";
    protected $fillable = [
        'food_id', 'post_id'
    ];
    public $timestamps = false;

    public function Food()
    {
        return $this->hasMany(Food::class, 'food_id', 'id');
    }

    public function Post()
    {
        return $this->hasMany(Post::class, 'post_id', 'id');
    }
}
