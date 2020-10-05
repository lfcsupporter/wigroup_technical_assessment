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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wigroup/auto_search', '\App\Http\Controllers\WigroupController@autoSearch')->name('wigroup.auto_search');
Route::get('/wigroup/wiki', '\App\Http\Controllers\WigroupController@wiki')->name('wigroup.wiki');
Route::get('/wigroup/wiki_details/{title?}/{pageid?}', '\App\Http\Controllers\WigroupController@wikiDetails')->name('wigroup.wiki_details');
