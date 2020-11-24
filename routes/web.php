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

//routes d'authentification
Auth::routes();

//routes Products
Route::resource('products', 'ProductController');

//routes pages statics
Route::get('/', 'StaticPagesController@landing_page')->name('root');
Route::get('/questionsfrequentes', 'StaticPagesController@frequently_questions')->name('frequently_questions');
