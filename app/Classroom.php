<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];

    /**
     * Students inside a class
     */
    public function students()
    {
        return $this->belongsToMany('App\Student');
    }

    /**
     * Teacher in charge of class
     */
    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }
}

