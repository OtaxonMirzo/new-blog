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
Route::get('', 'NewController@home') -> name('home');
Route::get('/grids', 'NewController@grids') -> name('grids');
Route::get('/forms', 'NewController@forms') -> name('forms');
Route::get('/compose_mail', 'NewController@compose_mail') -> name('compose_mail');
Route::get('/codes', 'NewController@codes') -> name('codes');
Route::get('/charts', 'NewController@charts') -> name('charts');
Route::get('/blank_page', 'NewController@blank_page') -> name('blank_page');
Route::get('/widgets', 'NewController@widgets') -> name('widgets');
Route::get('/tables', 'NewController@tables') -> name('tables');
Route::get('/media', 'NewController@media') -> name('media');
Route::get('/inbox', 'NewController@inbox') -> name('inbox');
Route::get('/sign_in', 'NewController@sign_in') -> name('sign_in');
Route::get('/sign_up', 'NewController@sign_up') -> name('sign_up');