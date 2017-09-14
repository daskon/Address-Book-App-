<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserAddresses extends Model
{
    use Notifiable;
    
     protected $fillable = [
        'user_id', 'address1','postcode','country','state'
    ];
}
