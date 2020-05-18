<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImport implements ToModel
{
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
            'mother_lastname' => $row[2], 
            'email' => $row[3]
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
                'mother_lastname' => $row[2], 
                'email' => $row[3]
            ]);
        }
    }
}
