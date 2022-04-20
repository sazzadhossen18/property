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







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




////Frontend
Route::get('/', 'Frontend\FrontendController@index')->name('index');
Route::get('/properties/{id}', 'Frontend\FrontendController@singleproperty')->name('single.property');
Route::get('/all-properties', 'Frontend\FrontendController@allproperty')->name('all.property');
Route::get('/property-location/{id}', 'Frontend\FrontendController@locationbyproperty')->name('locationby.property');






////Customer
Route::get('/add-property', 'Frontend\PropertyController@addproperty')->name('add.property');
Route::post('/store-property', 'Frontend\PropertyController@storeproperty')->name('store.property');

Route::post('/user-register', 'Frontend\PropertyController@userregister')->name('user.register');









            