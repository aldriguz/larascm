<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'story', 'address', 'is_active'
    ];

    /**
     * Classroom that owns the teacher
     */
    public function teacher()
    {
        return $this->hasOne('App\Classroom');
    }
    
    /**
     * User that teacher use to login
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }

}
