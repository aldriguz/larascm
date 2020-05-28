<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImport implements ToModel
{
    private $classroom_id = 0;


    function __construct($classroom_id)
    {
        $this->$classroom_id = $classroom_id;
    }


    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'name'     => $row[0],
            'father_lastname'    => $row[1], 
            'mother_lastname' => $row[2]
        ]);
    }

     /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Collection|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            Student::create([
                'name'     => $row[0],
                'father_lastname'    => $row[1], 
                'mother_lastname' => $row[2]
            ]);
        }
    }
}
