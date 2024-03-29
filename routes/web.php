<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/', 'SiteController@index');

$this->group(['middleware' => ['auth'],'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    $this->post('deposit', 'BalanceController@depositStore')->name('deposit.store');
    $this->get('deposit', 'BalanceController@deposit')->name('balance.deposit');
    $this->get('balance',"BalanceController@index")->name('admin.balance');
    $this->get('/', 'AdminController@index')->name('admin.home');
});

$this->get('/', 'site\SiteController@index')->name('home');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
