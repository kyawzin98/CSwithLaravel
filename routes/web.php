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

Route::get('/home', 'HomeController@index')->name('homepage');
Route::get('Products', 'PagesController@myProducts')->name('products');
Route::post('ProductsInputForm', 'PagesController@insertProduct')->name('product.insert');
Route::get('ProductsDetail/{id}', 'PagesController@viewProduct')->name('product.detail');
Route::get('ContactUs', 'PagesController@contactUs')->name('contact.us');
Route::get('Services', 'PagesController@services')->name('services');
Route::get('AboutUS', 'PagesController@aboutUs')->name('about.us');
Route::get('CRUDProducts', 'AdminController@viewProducts')->name('view.products');
Route::get('ProductsInputForm', 'AdminController@productForm')->name('product.form');


