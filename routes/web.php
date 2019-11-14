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

use App\Http\Controllers\PictureController;

Route::get('/', 'HomePageController@index');

Route::get('/events', 'EventController@index');
Route::get('/events/{id}', 'EventController@show');

Route::get('/album/{id}', 'PictureController@album');
Route::get('img-test', 'PictureController@test');
Route::post('save', 'PictureController@create');

Route::get('/products', 'ProductController@index');
Route::get('/products/{id}', 'ProductController@show');

Route::get('/ideas', 'IdeaController@index');
Route::get('/ideas/{id}', 'IdeaController@show');

Route::get('/legal', 'LegalController@index');

Route::get('products', 'ProductController@index')->name('product.index');

Route::get('test', 'TestController@test');



//Auth routes
Route::get('/login', 'Auth.LoginController@authenticate');
Route::get('/register', 'Auth.RegisterController@register');
Route::get('/logout', function () {
    Auth::logout();
});