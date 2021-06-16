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
Route::post('/', function () {
    return view('welcome');
});
Route::get('/check', function () {
    return redirect('/login');
});

Route::get('/dashboard',function ()
{
    return view('user.dashboard');
});
Route::get('/login/create','LoginController@check');
Route::post('/login/create','InfoStoreControllers@store');
 
Route::get('/register','UserController@initreg');
Route::post('/register','UserController@create');
Route::get('user/details/{id}','UserController@details');
Route::get('user/delete/{id}','UserController@delete');
Route::get('user/update/{id}','UserController@update');
Route::post('user/update/{id}','UserController@edit');
Route::get('/aa','NewLogController@index');
Route::get('/test','UserController@check');
    

