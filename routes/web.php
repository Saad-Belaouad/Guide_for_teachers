<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


Route::get('/','HomeController@index');
Auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@gethome')->name('home')->middleware('verified'); /* u can find it in middleware kernel */
/*here we will add a middlware cause we need to verify first before go to dashboard */

