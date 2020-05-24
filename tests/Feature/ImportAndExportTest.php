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
    public function test_check_if_txt_exists(){
        
        //Storage::disk('local')->put('file.txt', 'Contents');
        $this->assertTrue(Storage::disk('local')->exists('file.txt'));
        
    }
       
    public function test_import_students_get_call(){
        
        $response = $this->get('/students/import');

        $response->assertStatus(200);
        
    }

    /*
    public function test_import_list_of_students_from_storage(){

        Excel::fake();    

        $this->get('/students/import');

        Excel::assertImported('students.xlsx', 'local');
               
    }
    */
}
