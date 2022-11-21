<?php

namespace App\Imports;

use App\Student;
use App\Classroom;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Log;

class StudentsImport implements ToModel
{
    private $classroom_id;

    function __construct($classroom_id)
    {
        Log::debug('Classroom: ' . $classroom_id);

        $this->$classroom_id = $classroom_id;
    }


    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $classroom = new Classroom;

        if(!is_null($classroom_id))
        {
            Log::debug('Classroom: instance');

            $classroom = Classroom::find($classroom_id);
        }

        $student = new Student([
            'name'     => $row[0],
            'father_lastname'    => $row[1], 
            'mother_lastname' => $row[2]
        ]); 

        if(!is_null($classroom))
        {
            Log::debug('Classroom relation');
            $classroom->students()->save($student);
        }

        return $student;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Collection|null
    */
    public function collection(Collection $rows)
    {
        $classroom = new Classroom;

        if(!is_null($classroom_id))
        {
            Log::debug('Classroom: instance');

            $classroom = Classroom::find($classroom_id);
        }

        foreach ($rows as $row) 
        {
            $student = Student::create([
                'name'     => $row[0],
                'father_lastname'    => $row[1], 
                'mother_lastname' => $row[2]
            ]);

            if(!is_null($classroom))
            {
                Log::debug('Classroom relation');
                $classroom->students()->save($student);
            }            
        }
    }
}
