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
Route::post('/login', function () {
    return view('login.index');
});
Route::get('/check', function () {
    return redirect('/login');
});

Route::get('/dashboard',function ()
{
    return view('user.dashboard');
});


Route::get('/login','LoginController@check');  
Route::post('/login','LoginController@verify')->middleware('acscheck');
Route::post('/login/create','InfoStoreControllers@store');

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

Route::get('/dashboardmanager',function ()
{
    return view('mngr.dashboard');
}); 


Route::get('/mgrlogin', function () {
    return view('mngr.login');
});

Route::post('/mgrlogin','UserController@verifymgr');

Route::get('/mgrregister', function () {
    return view('mngr.register');
});
Route::get('/mgruserlist', function () {
    return view('mngr.userlist');
});
Route::get('/addclient', function () {
    return view('mngr.addclient');
});
Route::get('/addemployee', function () {
    return view('mngr.addemployee');
});
Route::get('/application', function () {
    return view('mngr.application');
});
Route::get('/loanapplication', function () {
    return view('mngr.loanapplication');
});
Route::get('/cardapplication', function () {
    return view('mngr.cardapplication');
});
Route::get('/employee', function () {
    return view('mngr.employee');
});
Route::get('/finacial', function () {
    return view('mngr.financials');
});
Route::get('/deal', function () {
    return view('mngr.deal');
});

Route::get('/currency', function () {
    return view('mngr.currency');
});

Route::get('/report', function () {
    return view('mngr.report');
});
Route::get('/officials', function () {
    return view('mngr.officials');
});
Route::get('/meeting', function () {
    return view('mngr.meeting');
});

Route::get('/seminar', function () {
    return view('mngr.seminar');
});
Route::get('/home', function () {
    return view('mngr.primarydashboard');
});

Route::get('/go', function () {
    return view('mngr.test');
});





Route::post('/login','CustomerController@login');

Route::get('/login', function () {
    return view('admin.login');
});
