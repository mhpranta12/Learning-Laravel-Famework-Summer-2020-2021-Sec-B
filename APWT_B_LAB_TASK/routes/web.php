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


Route::get('/dashboard',function ()
{
    return view('user.dashboard');
});




Route::get('/test', function () {
    return view('test');
});
// serach router
Route::get('/search',function ()
{
    return view('search');
}); 

Route::post('/search','UserController@searchuser');

 
Route::get('/register','UserController@initreg');
Route::post('/register','UserController@createindb');

Route::get('user/details/{id}','UserController@details');
Route::get('user/delete/{id}','UserController@delete');
Route::get('user/update/{id}','UserController@update');
Route::post('user/update/{id}','UserController@edit');


// Manager's Route 

Route::get('/dashboard',function ()
{
    return view('.dashboard');
}); 


Route::post('/ulogin','CustomerController@login');

Route::get('/ulogin', function () {
    return view('customer.login');
});
Route::get('/uregister',function ()
{
    return view('customer.registration');
}); 
Route::post('/uregister','CustomerController@insert');