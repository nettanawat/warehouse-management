<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {



//    Route::get('/admin/register', 'reg\RegistrationController@register');
    Route::post('/reg', 'Reg\RegistrationController@postRegister');
    Route::get('/login', 'Login\LoginController@login');
    Route::post('/login', 'Login\LoginController@postLogin');
    Route::get('/logout', 'Login\LoginController@logout');
    Route::get('/permission-denied', function () {
        return view('permission.denied');
    });
});

Route::group(['middleware' => ['web', 'auth']], function () {

    Route::get('/add-account', 'Reg\RegistrationController@register');
    Route::get('/vendor', 'SupplierController@index');
    Route::get('/add-vendor', 'SupplierController@create');
    Route::post('/add-vendor', 'SupplierController@store');
    Route::get('/', function (){
        return view('dashboard');
    });
});