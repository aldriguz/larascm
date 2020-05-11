<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentManagerController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('scm.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;

        $student->name = $request->input('name');
        $student->father_lastname = $request->input('father-lastname');
        $student->mother_lastname = $request->input('mother-lastname');

        $student->save();


    }

    
}
