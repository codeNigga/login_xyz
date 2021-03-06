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

Route::get('/profile/view/{slug}', [
    'uses'=>'ViewController@index',
    'as'=>'profile'
    ]);

Route::get('/profile/edit', [
    'uses'=>'ViewController@edit',
    'as'=>'profile.edit'
    ]);

Route::post('/profile/update', [
    'uses'=>'ViewController@update',
    'as'=>'profile.update'
    ]);
Route::get('/profile/delete/{id}', [
    'uses'=>'ViewController@delete',
    'as'=>'profile.delete'
    ]);


