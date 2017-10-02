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

Route::get('/', 'LibraryController@index')->name('index');

Route::get('/add','LibraryController@add' ) ->name('library.add');

Route::post('/save', [
    'uses' => 'LibraryController@save',
    'as' => 'library.save'
]);
Route::get('/{id}/edit','LibraryController@edit')->name('library.edit');

Route::put('/update/{id}', 'LibraryController@update')->name('library.update');
Route::get('/{id}','LibraryController@delete' )->name('library.delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
