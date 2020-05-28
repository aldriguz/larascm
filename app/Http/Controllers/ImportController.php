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
    public function import_students()
    {
        Excel::import(new StudentsImport, 'students.csv', null, \Maatwebsite\Excel\Excel::CSV);

        return redirect('/')->with('success', 'All good!');   
    }
    
}
