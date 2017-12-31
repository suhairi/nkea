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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Student test
//Route::get('insert','WartaController@insertform');
//Route::post('create','WartaController@insert');

//Home
Route::get('/home', 'HomeController@index')->name('home');

//Warta
Route::get('/form','WartaController@indexwarta');
Route::get('insert','WartaController@insertform');
Route::post('/add','WartaController@insert');
Route::get('/warta','WartaMenuController@index')->name('wartamenu');
Route::get('warta','WartaController@view');
Route::get('wartaupd/{id}','WartaController@updateindex');
Route::get('wartaupd/{id}','WartaController@updateshow');
Route::post('edit/{id}','WartaController@updatedit');
Route::get('wartadelete/{id}','WartaController@destroy');

//Perbicaraan
Route::get('/bicara','PerbicaraanMenuController@index')->name('bicara');
Route::get('insert','PerbicaraanController@insertform');
Route::post('/addbicara','PerbicaraanController@insertBicara');
Route::get('/bicaraform','PerbicaraanController@index')->name('bicaraform');
Route::get('/bicara','PerbicaraanController@viewbicara');


//Borang H
Route::get('/borangh','BorangHController@index')->name('borangh');
Route::get('insert','BorangHController@insertform');
Route::post('/addborangh','BorangHController@insertBorangh'); //insert borang h
Route::get('/boranghmenu','BorangHMenuController@index')->name('boranghmenu');
Route::get('boranghmenu','BorangHController@view');

//Borang K
Route::get('/borangk','BorangKController@index')->name('borangk');
Route::get('insert','BorangKController@inserform');
Route::post('/addborangk','BorangKController@insertBorangk');
Route::get('/borangkmenu','BorangKMenuController@index')->name('borangkmenu');
Route::get('borangkmenu','BorangKController@view');

//Settings sistem
Route::get('/settings','TetapanController@index');


//Add Blok
Route::get('/addblok','TambahBlokController@index')->name('addblok');
Route::get('insert','TambahBlokController@insertform');
Route::post('tambah','TambahBlokController@insert');

//Carian
Route::get('/carian','CarianController@index')->name('carian');

//Add State
Route::get('/negeri','NegeriController@index')->name('negeri');
Route::post('addstate','NegeriController@insert');