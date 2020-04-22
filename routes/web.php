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
Route::get('', 'CiteController@home') -> name('home');
Route::get('/about', 'CiteController@about') -> name('about');
Route::get('/services', 'CiteController@services') -> name('services');
Route::get('/contact', 'CiteController@contact') -> name('contact');
Route::get('/musics', 'CiteController@musics') -> name('musics');
Route::get('/more', 'CiteController@more') -> name('more');
Route::get('/admin/home', 'NewController@admin') -> name('admin');
Route::get('/admin/grids', 'NewController@grids') -> name('grids');
Route::get('/admin/forms', 'NewController@forms') -> name('forms');
Route::get('/admin/compose_mail', 'NewController@compose_mail') -> name('compose_mail');
Route::get('/admin/codes', 'NewController@codes') -> name('codes');
Route::get('/admin/charts', 'NewController@charts') -> name('charts');
Route::get('/admin/blank_page', 'NewController@blank_page') -> name('blank_page');
Route::get('/admin/widgets', 'NewController@widgets') -> name('widgets');
Route::get('/admin/tables', 'NewController@tables') -> name('tables');
Route::get('/admin/media', 'NewController@media') -> name('media');
Route::get('/admin/inbox', 'NewController@inbox') -> name('inbox');
Route::get('/admin/sign_in', 'NewController@sign_in') -> name('sign_in');
Route::get('/admin/sign_up', 'NewController@sign_up') -> name('sign_up');
Route::prefix('admin')->group(function(){
    Route::resource('musics', 'Admin\MusicsController');
});