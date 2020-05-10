<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DemoSetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(5).'@admin.com',
            'password'=> Hash::make('password')            
        ]);
        
        
        DB::table('teachers')->insert([
            'story' => Str::random(10),
            'address' => Str::random(150),
            'user_id'=> 1,
            'is_active' => true
        ]);


        DB::table('classrooms')->insert([
            'name' => Str::random(10),
            'description' => Str::random(20),
            'teacher_id' => 1
        ]);

        DB::table('classrooms')->insert([
            'name' => Str::random(10),
            'description' => Str::random(20),
            'teacher_id' => 1
        ]);
        
        for($i = 0; $i < 100; $i++){

            DB::table('students')->insert([
                'name' => Str::random(10).' '.Str::random(5),
                'father_lastname' => Str::random(20),
                'mother_lastname' => Str::random(20),
                'email' => Str::random(20).'@mail.com'
            ]);
        }

        
        for($id = 1; $id <= 100; $id++){
                        
            DB::table('classroom_student')->insert([
                'student_id' => $id,
                'classroom_id' => rand(1, 2)                
            ]);
        }

    }
}
