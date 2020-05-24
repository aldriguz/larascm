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

Route::post('/classrooms/{classroom_id}/students/bulk', 'StudentManagerController@bulk_store')
        //->middleware('auth') 
        ->name('classrooms.students.bulk');  

Route::post('/classrooms/{classroom_id}/students/bulk_preview', 'ExportController@preview')
        //->middleware('auth') 
        ->name('classrooms.students.bulk_preview');        

Route::get('/classrooms/{classroom_id}/students/download', 'ExportController@download')
        //->middleware('auth') 
        ->name('classrooms.students.download');    

Route::get('/classrooms/{classroom_id}/students/import', 'ImportController@import_students')
        //->middleware('auth') 
        ->name('classrooms.students.import');


/**
 * Json information routes
 */
Route::get('/json_view', 'PreviewDataController@load')->name('json_view');  

Route::get('/students/import', 'ImportController@import_students')
        //->middleware('auth') 
        ->name('students.import');