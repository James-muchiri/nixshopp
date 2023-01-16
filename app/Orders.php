<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //

    public function orders()
    {
         return $this->hasMany(Orders::class); 
    }
    public function user()
    {
        return $this->belongsTo(E_users::class, 'e_users_id');
    }
}
