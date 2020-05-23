<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentsImport;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ImportAndExportTest extends TestCase
{    

    /* 
    public function test_store_new_files(){
        
        Storage::disk('local')->put('file.txt', 'Contents');
        
    }
    */


    public function test_import_list_of_students(){

        Excel::fake();    
        
        Excel::assertImported('students.xlsx', 'temps');
        
        // When passing the callback as 2nd param, the disk will be the default disk.
        /*Excel::assertImported('filename.xlsx', function(StudentsImport $import) {
            return true;
        });*/
    }
}
