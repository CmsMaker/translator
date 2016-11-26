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



Auth::routes();


Route::get('/home', 'HomeController@index');
Route::get('/', function () {
    return view('translate.home');
});
Route::get('/home', 'HomeController@index')->name('homepage');
Route::get('/see/dictionary', 'DictionaryController@see_dictionary')->name('see_dictionary');
Route::get('/add/word', 'DictionaryController@add_word_get')->name('add_word');
Route::post('/add/word', 'DictionaryController@add_word_post');
Route::get('/see/user', 'DictionaryController@see_user')->name('see_user');
Route::get('/see/admin', 'DictionaryController@see_admin')->name('see_admin');
Route::get('/invite/user', 'DictionaryController@invite_user_get')->name('invite_user');
Route::post('/invite/user', 'DictionaryController@invite_user_post');
Route::get('/report', 'DictionaryController@report')->name('report');
Route::get('/delete/word/{id}', 'DictionaryController@delete_word')->name('delete_word');
Route::get('/delete/user/{id}', 'DictionaryController@delete_user')->name('delete_user');
Route::get('/edit/word/{id}', 'DictionaryController@edit_word_get')->name('edit_word');
Route::post('/edit/word/{id}', 'DictionaryController@edit_word_post');
Route::get('/edit/user/{id}', 'DictionaryController@edit_user')->name('edit_user');
