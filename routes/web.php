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
Route::get('/update_page_type', 'PageController@update_page_type')->name('pageupdate');
Route::get('/update_category', 'PageController@update_category')->name('updatecategory');
Route::resource('page','PageController');
Route::get('admin', 'AdminController@index')->middleware('rolecheck:admin')->name('admin.index');
Route::get('createcategory', 'AdminController@CreateCategory')->name('createcategory');
Route::get('storecategory', 'AdminController@StoreCategory')->name('storecategory');
Route::put('postcategory', 'AdminController@PostCategory')->name('postcategory');
