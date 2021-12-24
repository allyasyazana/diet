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

Route::get('patient/home', 'HomeController@patientHome')->name('patient.home')->middleware('is_patient');

//index dietician
Route::get('/dieticians', 'DieticianController@index')->name('dieticians.index');

Route::resource('dieticians','DieticianController');

Route::resource('meals','MealController');

Route::resource('patients','PatientController');

Route::resource('tracks','TrackMealController');

//Route::get('/patients', 'PatientController@index')->name('patients.index');

//create dietician
//Route::get('/dieticians/create', 'DieticianController@create')->name('dieticians.create');

//store dietician
//Route::post('/dieticians', 'DieticianController@store')->name('dieticians.store');

//show dietician
//Route::get('/dieticians/{dietician}', 'DieticianController@show')->name('dieticians.show');

//edit dietician
//Route::get('/dieticians/{dietician/edit}', 'DieticianController@edit')->name('dieticians.edit');

//update dietician
//Route::put('/dieticians/{dietician}', 'DieticianController@update')->name('dieticians.update');

//delete/destroy dietician
//Route::delete('/dieticians/{dietician}', 'DieticianController@destroy')->name('dieticians.destroy');


