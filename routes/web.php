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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','Front\DentistsController@dentistindex')->name('dental');
Route::get('/about','Front\DentistsController@dentistabout')->name('a');
Route::get('/blog','Front\DentistsController@blog')->name('b');
Route::get('/blogdetail','Front\DentistsController@blogD')->name('bd');
Route::get('/service','Front\DentistsController@services')->name('s');
Route::get('/price','Front\DentistsController@prices')->name('p');
//sending email from customer
Route::match(['get','post'], '/contact', 'Front\SendEmailController@contact')->name('c');
//Route::match(['get','post'], '/appointment', 'Front\SendEmailController@appointMent');
Route::match(['get','post'], '/appointment', 'Front\DentistsController@appointMent')->name('appoint');

//Check Subscriber Email
Route::post('/check-subscriber-email','Front\NewsletterController@checkSubscriber');
//Add Subscriber Email
Route::post('/add-subscriber-email','Front\NewsletterController@addSubscriber');
//View Newsletter 
Route::post('/view-nl-subscriber','Front\NewletterController@viewSubscriber');
