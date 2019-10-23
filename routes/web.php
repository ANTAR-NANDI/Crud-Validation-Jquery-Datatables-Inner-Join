<?php

/*

Route::get('about/{name}/{email}', function ($n,$e) {
    echo "khan!!!!";
    echo $n;
    echo $e;

});

Route::get('about', function () {
    echo "khan!!!!";
});


|--------------------------------------------------------------------------
| Web Routes
Route::get('about/{name}/{email}', function ($n,$e) {
    return view('about',['myname'=>$n,'myemail'=>$e]);

});
|--------------------------------------------------------------------------
|| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('about/{name}/{email}','MyController@about');

Route::get('add','MyController@add');

//insert data
Route::post('store','MyController@store');

//Data show
Route::get('show','MyController@show');

//Edit related
Route::get('edit/{id}','MyController@update');
Route::post('update/{id}','MyController@update_data');

//delete route
Route::get('delete/{id}','MyController@delete');

//join query
Route::get('join-query','MyController@all');

//multiple image upload
Route::get('upload','UploadController@viewpage');
Route::post('uploadimage','UploadController@store');

//pdf generate
Route::get('pdf/{id}','UploadController@downloadPDF');

Route::get('excel','UploadController@import');
Route::post('import','UploadController@importFile');