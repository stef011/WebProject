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

use App\Http\Controllers\AdminController;
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

Route::get('/legal', 'LegalController@index')->name('legalroute');

Route::get('products', 'ProductController@index')->name('product.index');

Route::get('test', 'TestController@test');


Route::get('admin', 'AdminController@index');



Route::get('admin/events', 'AdminController@showEvents')->name('admin.events');

Route::get('admin/events/{eventId}/delete', ['as' => 'delete', 'uses' => 'AdminController@eventDelete']);

Route::get('admin/events/{evendId}/modify', ['as' => 'modify', 'uses' => 'AdminController@eventModify']);

Route::post('admin/events/{eventId}/update', ['as' => 'update', 'uses' => 'AdminController@eventUpdate']);



Route::get('admin/products', 'AdminController@showProducts')->name('admin.products');

Route::get('admin/products/{productId}/delete', ['as' => 'delete', 'uses' => 'AdminController@productDelete']);

Route::get('admin/products/{productId}/modify', ['as' => 'modify', 'uses' => 'AdminController@productModify']);

Route::post('admin/products/{productId}/update', ['as' => 'modify', 'uses' => 'AdminController@productUpdate']);



//Auth routes
Route::get('/login', 'Auth.LoginController@authenticate');
Route::get('/register', 'Auth.RegisterController@register');
Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/register', function () {
    return view('auth/register');
});
Route::get('/logout', function () {
    Auth::logout();
});
Route::get('contact', 'RegisterController@create');
Route::post('contact', 'RegisterController@store');
