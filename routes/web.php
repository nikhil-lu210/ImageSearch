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

// Nikhil Route
Route::get('/nikhil', 'Frontend\Nikhil\ImageSearch\ImageSearchController@index')->name('nikhil.index');
Route::get('/nikhil/create', 'Frontend\Nikhil\ImageSearch\ImageSearchController@create')->name('nikhil.create');
Route::post('/nikhil/store', 'Frontend\Nikhil\ImageSearch\ImageSearchController@store')->name('nikhil.store');
Route::get('/nikhil/show', 'Frontend\Nikhil\ImageSearch\ImageSearchController@show')->name('nikhil.show');
// Search Route
Route::post('/nikhil/search/image', 'Frontend\Nikhil\ImageSearch\ImageSearchController@imageSearch')->name('nikhil.image.search');
Route::post('/nikhil/search/name', 'Frontend\Nikhil\ImageSearch\ImageSearchController@nameSearch')->name('nikhil.name.search');
Route::post('/nikhil/search/nid', 'Frontend\Nikhil\ImageSearch\ImageSearchController@nidSearch')->name('nikhil.nid.search');
Route::post('/nikhil/search/phone', 'Frontend\Nikhil\ImageSearch\ImageSearchController@phoneSearch')->name('nikhil.phone.search');



// Pias Route
Route::get('/pias', 'Frontend\Pias\ImageSearch\ImageSearchController@index')->name('pias.index');
Route::get('/pias/create', 'Frontend\Pias\ImageSearch\ImageSearchController@create')->name('pias.create');
Route::post('/pias/store', 'Frontend\Pias\ImageSearch\ImageSearchController@store')->name('pias.store');
Route::get('/pias/show/{id}', 'Frontend\Pias\ImageSearch\ImageSearchController@show')->name('pias.show');
