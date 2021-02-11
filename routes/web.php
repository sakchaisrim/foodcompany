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

Route::get('home', 'BasicController@home');
Route::get('about', 'BasicController@about');
Route::get('service', 'BasicController@service');
Route::get('portfolio', 'BasicController@portfolio');
Route::get('blog', 'BasicController@blog');
Route::get('contact', 'BasicController@contact');