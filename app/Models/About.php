<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = "about";
    protected $primaryKey = "id";
    protected $fillable = [
        'post_id'
    ];

    public $timestamps = false;

    public function Post()
    {
        return $this->hasMany(Post::class, 'post_id', 'id');
    }
}
