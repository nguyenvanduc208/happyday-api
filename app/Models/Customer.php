<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{ 
    use HasFactory;
    protected $table ='customer';
    protected $fillable = [
        'name',
        'email',
        'password',
        'password_confirm',
        'address',
        'number_phone',
    ];
    /*
    @var array
    */
   protected $hidden = [

       'remember_token'
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
