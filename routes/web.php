<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/clear-cache', function() {
    //$exitCode = Artisan::call('storage:link');
    $exitCode = Artisan::call('config:cache');
     return 1;
});*/

Route::get('/', 'WelcomeController@index');

Auth::routes(['register' => false]);
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//product
Route::get('/product', 'ProductController@index')->name('product');
Route::post('/product/store', 'ProductController@store')->name('product.store');
Route::put('/product/update/{id}', 'ProductController@update')->name('product.update');
Route::get('/product/delete/{id}', 'ProductController@delete')->name('product.delete');

//Gallery
Route::get('/gallery', 'GalleryController@index')->name('gallery');
Route::post('/gallery/store', 'GalleryController@store')->name('gallery.store');
Route::put('/gallery/update/{id}', 'GalleryController@update')->name('gallery.update');
Route::get('/gallery/delete/{id}', 'GalleryController@delete')->name('gallery.delete');

//Client
Route::get('/client', 'ClientController@index')->name('client');
Route::post('/client/store', 'ClientController@store')->name('client.store');
Route::put('/client/update/{id}', 'ClientController@update')->name('client.update');
Route::get('/client/delete/{id}', 'ClientController@delete')->name('client.delete');

//Blog
Route::get('/blog', 'BlogController@index')->name('blog');
Route::post('/blog/store', 'BlogController@store')->name('blog.store');
Route::put('/blog/update/{id}', 'BlogController@update')->name('blog.update');
Route::get('/blog/delete/{id}', 'BlogController@delete')->name('blog.delete');

//Contact
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact/store', 'ContactController@store')->name('contact.store');
Route::get('/contact/delete/{id}', 'ContactController@delete')->name('contact.delete');