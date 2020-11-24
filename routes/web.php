<?php

use Illuminate\Support\Facades\Route;
use App\Mail\Email;
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

//routes d'authentification
Auth::routes();

//routes pages statics
Route::get('/home', 'HomeController@index')->name('home');

//routes d'envoi d'email'
Route::get('/testmail', function() {
  
  $data = ['message' => 'This is a test'];
  
  Mail::to('prixmarche@yopmail.com')->send(new Email($data));
 
  echo "Email envoyé";
});