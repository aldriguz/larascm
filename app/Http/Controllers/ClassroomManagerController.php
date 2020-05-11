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
    public function select_classroom(Request $request)
    {
        $classroom_id = $request->input('classroom-id');                

        //return response()->json([$students, Classroom::find($classrooms_id)]);

        //return view('scm.classroom.list')->with('students', $students);

        return redirect()->route('classrooms.students', ['classroom_id' => $classroom_id]);
    }


    /**
     * Redirect to view to chosse classroom to manage
     *
     * @return \Illuminate\Http\Response
     */
    public function students($classroom_id)
    {
        //$classrooms = Classroom::all();
        $students = Classroom::find($classroom_id)->students;

        return view('scm.classroom.list')
                ->with('students', $students)
                ->with('classroom_id', $classroom_id);
    }


}
