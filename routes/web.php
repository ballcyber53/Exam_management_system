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

// Route::get('/examroom', 'HomeController@examroom')->name('examroom');
// Route::get('/examroom', 'UserController@examroom')->name('examroom');

Route::get('examroom/{classroom_no}', [
    'as' => 'examroom',
    'uses' => 'UserController@examroom'
]);

Route::get('examroom', 'UserController@examroom');



Route::resource('users','UserController',['except' => 'examroom'])->middleware('admin');

Route::resource('faculties','FacultyController')->middleware('admin');

Route::resource('majors','MajorController')->middleware('admin');

Route::resource('classrooms','ClassroomController')->middleware('admin');


Route::get('/sendemail', 'SendEmailController@index')->name('sendemail')->middleware('admin');
    Route::post('/sendemail/send', 'SendEmailController@send')->middleware('admin');
    Route::get('/autocomplete', 'SendEmailController@autocomplete')->name('autocomplete')->middleware('admin');


////search
    // Route::get('search', 'SearchController@index')->name('search');

    // Route::get('autocomplete', 'SearchController@autocomplete')->name('autocomplete');

// Route::resource('seats','SeatController')->middleware('admin');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

