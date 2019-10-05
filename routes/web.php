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
})->name('welcome');

// Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/ticket','TicketController')->middleware('auth');

Route::get('register','AuthUserController@register')->name('register');
Route::post('activate','AuthUserController@activate')->name('activate');
Route::get('activateAccount/{ticket_id}','AuthUserController@activateAccount')->name('activateAccount');
Route::get('logout','AuthUserController@logout')->name('clientLogout');
Route::get('success','AuthUserController@success')->name('success');
Route::post('register','AuthUserController@postRegister')->name('register');
Route::post('activateAccount','AuthUserController@postActivate')->name('postActivate');
Route::post('login','AuthUserController@postLogin')->name('loginPost');


Route::group(['prefix' => 'dev_con'], function () {
    Route::get('/', 'AdminController@index');
    Route::get('login', 'AdminController@login');
    Route::post('login', 'AdminController@postLogin');
    Route::get('logout', 'AdminController@logout');
    Route::post('searchuser', 'AdminController@search');
});