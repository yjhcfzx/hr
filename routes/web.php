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
Route::get('resume/detail/{id}', 'ResumeController@show');
Route::get('resume', 'ResumeController@index');
Route::get('resume/upload', 'ResumeController@upload');
Route::post('resume/upload', 'ResumeController@uploadSave');