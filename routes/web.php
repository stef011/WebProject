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


Route::get('/', 'HomePageController@index');

Route::get('/events', 'EventController@index');
Route::get('/events/{id}', 'EventController@show');

Route::get('/legal', 'LegalController@index');

Route::resource('products', 'ProductController');

Route::get('test', 'TestController@test');



//Auth routes
Route::get('/login', 'Auth.LoginController@authenticate');
Route::get('/register', 'Auth.RegisterController@register');
Route::get('/logout', function () {
    Auth::logout();
});
