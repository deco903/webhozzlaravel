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


//show table
Route::get('/category','CategoryController@index');
//show form
Route::get('/category/create','CategoryController@create');
//insert database
Route::post('/category/create','CategoryController@store');

Route::get('/category/{id}/edit','CategoryController@edit');

Route::put('/category/{id}','CategoryController@update');

Route::delete('/category/{id}','CategoryController@destroy');



Route::get('/', function () {
    $message = "laravel is awesome";
    $language = ['php','javascript','phyton','phyton','golang'];
    $number = 10 * 5;
    //return view('test', compact('message', 'language', 'number'));
     return view('test',[
          'language' => $language,
         'message' => $message,
         'number' => $number
     ]);
});

Route::get('about', function () {
    return 'form about';
});

