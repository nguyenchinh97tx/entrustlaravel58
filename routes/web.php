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


Route::group(['middleware' => 'auth'], function() {

    Route::get('/home', 'HomeController@index');

    Route::resource('users','UserController');
    //Route::resource('roles','RoleController');

    Route::get('roles','RoleController@index')->name('roles.index')->middleware('permission:role-list|role-create|role-edit|role-delete');
    Route::get('roles/create','RoleController@create')->name('roles.create')->middleware('permission:role-create');
    Route::post('roles/create','RoleController@store')->name('roles.store')->middleware('permission:role-create');
    Route::get('roles/{id}','RoleController@show')->name('roles.show');
    Route::get('roles/{id}/edit','RoleController@edit')->name('roles.edit')->middleware('permission:role-edit');
    Route::patch('roles/{id}','RoleController@update')->name('roles.update')->middleware('permission:role-edit');
    Route::delete('roles/{id}','RoleController@destroy')->name('roles.destroy')->middleware('permission:role-delete');

});
