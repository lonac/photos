<?php

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

Route::get('studio','PhotoStudioController@create');

//schools
Route::get('schools','SchoolController@index');
Route::get('schools/create','SchoolController@create');
Route::post('schools/create','SchoolController@store');
Route::get('schools/{id}','SchoolController@show');
Route::post('schools/{id}','SchoolController@ImportSheetToDB');
Route::get('schools/{id}/edit','SchoolController@edit');
Route::patch('schools/{id}/edit','SchoolController@update');
Route::get('schools/{id}/pdf','SchoolController@downloadPDF');
Route::get('schools/{id}/pdf-form','SchoolController@getPdfView');



//excell
Route::get('schools/{id}/excell/create','ExcellController@create');
Route::post('schools/{id}/excell/create','ExcellController@store');

//student
Route::get('schools/{id}/students/{student_id}','StudentController@editstudent');
Route::patch('schools/{id}/students/{student_id}','StudentController@UpdateStudent');
Route::post('schools/{id}/excell/create','StudentController@store');

//item
Route::get('importExport', 'MaatwebsiteDemoController@importExport');
Route::get('downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel');
Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');

Route::get('items', 'ItemController@index');
Route::post('items/import', 'ItemController@import');

Route::get('import-export-csv-excel',array('as'=>'excel.import','uses'=>'FileController@importExportExcelORCSV'));
Route::post('import-csv-excel',array('as'=>'import-csv-excel','uses'=>'FileController@importFileIntoDB'));
Route::get('download-excel-file/{type}', array('as'=>'excel-file','uses'=>'FileController@downloadExcelFile'));

Route::get('school-sheet',array('as'=>'excel.import','uses'=>'SheetController@getSheet'));
Route::post('school-sheet',array('as'=>'import-csv-excel','uses'=>'SheetController@importToDB'));
Route::get('download-excel-file/{type}', array('as'=>'excel-file','uses'=>'SheetController@downloadExcelSheet'));


//Picture Upload
Route::post('schools/{id}/pictures/Upload','PictureController@UploadImage');

//Photos
Route::get('schools/{id}/school_photos/add','PhotoController@add');
Route::post('schools/{id}/school_photos/add','PhotoController@UploadPhotos');