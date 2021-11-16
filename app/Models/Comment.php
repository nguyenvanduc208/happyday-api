<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $table='comment';
    protected $fillable=[
        'customer_id',
        'post',
        'resort_id',

    ];
    public function customer(){
    	return $this->belongsTo(Customer::class,'customer_id');
    }
    public function resort()
    {
        return $this->belongsTo(Resort::class, 'resort_id');
    }

    use HasFactory;
}
