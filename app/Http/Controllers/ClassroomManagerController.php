<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;

class ClassroomManagerController extends Controller
{    
    /**
     * Redirect to view to chosse classroom to manage
     *
     * @return \Illuminate\Http\Response
     */
    public function choose()
    {
        $classrooms = Classroom::all();

        return view('scm.classroom.open', $classrooms);
    }

    /**
     * Retrieveng information after choose an classroom
     *
     * @return \Illuminate\Http\Response
     */
    public function set_classroom(Request $request)
    {
        $classrooms = Classroom::all();

        return view('scm.classroom.open', $classrooms);
    }
}
