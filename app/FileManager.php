<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileManager extends Model
{
    private $temp_path = "/temp";
    private $csv_path = "/csv";

    /**
     *  1. Check if is valid
     *  2. CSV to Object Collection
     *  3. Excel to Object Collection
     *  4. Store file in folder
     *  5. Store metadata file info in database
     * 
     */


     public function validate($file, $header){

     }


     public function store_temp($file){


     }

     public function csv_to_collection(){
         
        Excel::import(new UsersImport, request()->file('your_file'));

     }

}
