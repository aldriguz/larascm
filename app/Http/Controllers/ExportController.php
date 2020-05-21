<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExport;
use App\Imports\StudentsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Exporter;

class ExportController extends Controller
{
    private $exporter;

    public function __construct(Exporter $exporter)
    {
        $this->exporter = $exporter;
    }

    /**
     * Read information from file to show in view
     *
     * @return \Illuminate\Http\Response
     */
    public function download($classroom_id, Request $request)
    {
        return $this->exporter->download(new StudentsExport, 'students.xlsx');
    }
     
    /**
     * Read information from file to show in view
     *
     * @return \Illuminate\Http\Response
     */
    public function preview($classroom_id, Request $request)
    {
        $collection = $this->exporter->toCollection(new StudentsImport, $request->file('students'), \Maatwebsite\Excel\Excel::XLSX);

        //Excel::import(new StudentsImport, $request->file('students'));

        return redirect()->route('json_view', ['data' => $collection]);
    }    
}
