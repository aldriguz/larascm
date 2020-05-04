<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'father_lastname', 'mother_lastname', 'email'
    ];
        
    /**
     *  Classroom that student belongs to
     */
    public function classrooms()
    {
        return $this->belongsToMany('App\Classroom');
    }

}
