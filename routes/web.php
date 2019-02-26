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
    return view('home');
});

Auth::routes();

Route::get('/notes', 'Back\NotesController@index')->name('home');
Route::get('/notes/add', 'Back\NotesController@add')->name('notes.add');
Route::post('/notes/add', 'Back\NotesController@save')->name('notes.save');
Route::get('/notes/edit/{id?}', 'Back\NotesController@edit')->name('notes.edit');
Route::put('/notes/edit/{id?}', 'Back\NotesController@edit')->name('notes.update');
Route::get('/notes/delete/{id?}', 'Back\NotesController@deleteNote')->name('notes.delete');
Route::delete('/notes/delete/All', 'Back\NotesController@deleteNote')->name('notes.deleteAll');
Route::get('/cron/notification', 'Notification\OneSignalController@send')->name('notification.send');



 


