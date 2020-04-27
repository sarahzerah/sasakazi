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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [
//     'uses' => 'PagesController@index',
//     'as'   => 'main'
// ]);

Route::get('/', 'PagesController@index')->name('main');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/courses', 'PagesController@courses')->name('courses');

Route::get('/event', 'PagesController@event')->name('event');

Route::get('/contact', 'PagesController@contact')->name('contact');

Route::resource('/courses', 'CoursesController', ['as'=>'backend']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
