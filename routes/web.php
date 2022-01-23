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

//Route::group(['middleware' => ['auth','is_patient']], function(){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/patient/home', 'HomeController@patientHome')->name('patient.home')->middleware('is_patient');

    Route::get('/dietician/home', 'HomeController@dieticianHome')->name('dietician.home');

    //Route::get('/patients', 'PatientController@index')->name('patients.index');

    //Route::get('/patients/{patient/edit}', 'PatientController@edit')->name('patients.edit');
//});

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('patient/home', 'HomeController@patientHome')->name('patient.home')->middleware('is_patient');

//index dietician
Route::get('/dieticians', 'DieticianController@index')->name('dieticians.index');

Route::resource('dieticians','DieticianController');

Route::resource('meals','MealController');

Route::resource('patients','PatientController');

//Route::get('/patients/{patient/edit}', 'PatientController@edit')->name('patients.edit');

Route::resource('tracks','TrackController');

Route::get('/records','RecordController@index')->name('records.index');
Route::get('/getCalorie/{id}', 'RecordController@getCalorie');

Route::resource('appointments','AppointmentController');

Route::resource('appointmentpatients','AppointmentPatientController');

Route::resource('mealpatients','MealPatientController');

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


