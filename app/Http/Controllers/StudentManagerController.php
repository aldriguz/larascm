<?php

namespace App\Http\Controllers;

use App\Student;
use App\Classroom;
use Illuminate\Http\Request;

class StudentManagerController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($classroom_id)
    {
        return view('scm.student.create')->with('classroom_id', $classroom_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($classroom_id, Request $request)
    {
        $classroom = Classroom::find($classroom_id);

        $student = new Student;

        $student->name = $request->input('name');
        $student->father_lastname = $request->input('father-lastname');
        $student->mother_lastname = $request->input('mother-lastname');
        $student->email = $request->input('email');
        
        $classroom->students()->save($student);

        return redirect()->route('classrooms.students', ['classroom_id' => $classroom_id]);
    }

    
}
