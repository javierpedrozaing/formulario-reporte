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
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    // save form
    Route::post('/save', 'FormsController@store')->name('saveform');

    // generate pdf and send email
    Route::post('/send', 'FormsController@send')->name('sendemail');

    // listing forms created
    Route::get('/list', 'FormsController@index')->name('listform');

    // show detail form
    Route::get('/show/{id}', 'FormsController@show')->name('showform');

    // Edit form
    Route::get('/edit/{id}', 'FormsController@edit')->name('editform');

    // UPDATE form
    Route::post('/update', 'FormsController@update')->name('updateform');

    // generate PDF
    Route::get('/downloadPDF/{id}','FormsController@downloadPDF');

    Route::get('/home', 'HomeController@index')->name('home');
});




