<?php

use Illuminate\Support\Facades\Route;
use Gloudemans\Shoppingcart\Facades\Cart;
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
Route::get('/search', 'ProductController@search')->name('products.search');
Route::get('/search/category', 'ProductController@search_category')->name('products.search_category');

//routes Categories
Route::resource('categories', 'CategoryController');

//routes Cart
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart/add', 'CartController@store')->name('cart.store');
Route::delete('/cart/{rowId}', 'CartController@destroy')->name('cart.destroy');

// Route::get('/emptycart', function() {
//     Cart::destroy();
// });

//routes pages statics
Route::get('/home', 'StaticPagesController@landing_page');
Route::get('/', 'StaticPagesController@landing_page')->name('root');
Route::get('/questionsfrequentes', 'StaticPagesController@frequently_questions')->name('frequently_questions');

//route page admin
Route::get('/admin/dashboard', 'AdminController@dashboard_admin')->name('dashboard');