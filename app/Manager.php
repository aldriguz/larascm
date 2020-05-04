<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    /**
     * User that manager use to login
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
