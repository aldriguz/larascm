<?php

namespace App\Http\Controllers;

use App\Imports\StudentsImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    /**
     * Import students
     *
     * @return \Illuminate\Http\Response
     */
    public function students($classroom_id, Request $request)
    {
        Excel::import(new StudentsImport($classroom_id), $request->file('students_file'), \Maatwebsite\Excel\Excel::CSV);
                 
        return view('classrooms.students')
                ->with('classroom_id', $classroom_id)
                ->with('import_successful', 'Acaba de registrar a los alumnos correctamente');
    }

    /**
     * Import students
     *
     * @return \Illuminate\Http\Response
     */
    public function students_file($classroom_id)
    {
        Excel::import(new StudentsImport($classroom_id), 'students.csv',  \Maatwebsite\Excel\Excel::CSV);
                 
        return response(200);
    }
    
}
