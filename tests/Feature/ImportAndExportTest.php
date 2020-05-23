<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StudentsExport;
use App\Imports\StudentsImport;
use Tests\TestCase;

class ImportAndExportTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    public function import_list_of_students(){

        Excel::fake();
    
        $this->actingAs($this->givenUser())
             ->get('/users/import/xlsx');
    
        Excel::assertImported('students.xlsx');
        
        // When passing the callback as 2nd param, the disk will be the default disk.
        Excel::assertImported('filename.xlsx', function(StudentsImport $import) {
            return true;
        });
    }

    
}
