<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Exporter;
use Maatwebsite\Excel\Facades\Excel;

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
    public function students($classroom_id, Request $request)
    {
        return $this->exporter->download(new StudentsExport, 'students.xlsx');
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
         
}
