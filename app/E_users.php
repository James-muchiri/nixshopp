<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class E_users extends Authenticatable
{
    
    protected $fillable = [
        'first_name','middle_name','last_name','tel_no', 'email','password'
    ];

    public function orders(){

        return $this->hasMany(Orders::class);
    }
}
