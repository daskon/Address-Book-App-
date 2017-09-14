<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'user_id', 'passport_number','phone_number'
    ];
}
