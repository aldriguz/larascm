<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;
//use App\Student;

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

        return view('scm.classroom.open')->with('classrooms', $classrooms);
    }

    /**
     * Retrieveng information after choose an classroom
     *
     * @return \Illuminate\Http\Response
     */
    public function classroom_selected(Request $request)
    {
        $classrooms_id = $request->input('classroom-id');        

        $students = Classroom::find($classrooms_id)->students;

        //return response()->json([$students, Classroom::find($classrooms_id)]);

        return view('scm.classroom.list')->with('students', $students);
    }
}
