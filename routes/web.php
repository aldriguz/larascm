<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/classrooms', 'ClassroomManagerController@choose')
        //->middleware('auth')
        ->name('classrooms');      

Route::post('/classrooms', 'ClassroomManagerController@select_classroom')
        //->middleware('auth')
        ->name('classrooms');      

Route::get('/classrooms/{classroom_id}/students', 'ClassroomManagerController@students')
        //->middleware('auth')
        ->name('classrooms.students');

Route::get('/classrooms/{classroom_id}/students/create', 'StudentManagerController@create')
        //->middleware('auth') 
        ->name('classrooms.students.create');  
        
Route::post('/classrooms/{classroom_id}/students', 'StudentManagerController@store')
        //->middleware('auth')
        ->name('classrooms.students.store');  

Route::get('/classrooms/{classroom_id}/students/upload', 'StudentManagerController@upload')
        //->middleware('auth') 
        ->name('classrooms.students.upload');  

Route::post('/classrooms/{classroom_id}/imports/students', 'ImportController@students')
        //->middleware('auth') 
        ->name('classrooms.imports.students');

Route::get('/classrooms/{classroom_id}/students/download', 'StudentManagerController@download')
        //->middleware('auth') 
        ->name('classrooms.students.upload');  


/**
 * Test routes
 */
Route::get('/json_view', 'PreviewDataController@load')->name('json_view');  

// route-> /import/{classroom_id}
Route::get('/import/{classroom_id}', 'ImportController@students_file')
        ->name('import');  
