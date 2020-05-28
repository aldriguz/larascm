<?php

namespace App\Http\Controllers;

use App\Student;
use App\Classroom;
use App\Exports\StudentsExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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

    /**
     * Show the form to upload list of students in file
     *
     * @return \Illuminate\Http\Response
     */
    public function upload($classroom_id)
    {
        return view('scm.student.upload')->with('classroom_id', $classroom_id);
    }
    
}
