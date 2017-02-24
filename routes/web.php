<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//
// Route::get('/', function () {
//     return view('welcome');
// });
//
// Route::get('/profile', 'ProfileController@getProfile');

Route::get('/', 'ReminderController@home');

Route::post('/reminder/new', 'ReminderController@addReminder');

Route::delete('/reminder/delete', 'ReminderController@deleteReminder');

Route::post('/remindertype/new', 'ReminderTypeController@addReminderType');

Route::get('/finished', 'ReminderController@showFinishReminder');

Route::get('/remindertype', 'ReminderTypeController@listReminderType');

Route::get('/file', 'FileController@home');
Route::post('/file/upload', 'FileController@upload');
Route::get('/file/{fileName}', 'FileController@download');
