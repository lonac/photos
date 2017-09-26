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
Route::get('schools/{id}/edit','SchoolController@edit');
Route::patch('schools/{id}/edit','SchoolController@update');


//excell
Route::get('schools/{id}/excell/create','ExcellController@create');
Route::post('schools/{id}/excell/create','ExcellController@store');

//item
Route::get('importExport', 'MaatwebsiteDemoController@importExport');
Route::get('downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel');
Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');

Route::get('items', 'ItemController@index');
Route::post('items/import', 'ItemController@import');