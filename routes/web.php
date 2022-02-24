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

/*Route::get('/', function () {
    return view('welcome');
});*/


//route bawaan default laravel
Route::get('/', function () {
    return view("home");
});

/*Route::get('/', function () {
    return "HALLO ALPHARD";
});*/

//route dosen,pegawai dan form

Route::get("dosen", "DosenController@index");
//Route::get("pegawai", "PegawaiController@index");
//Route::get('/pegawai/{ALPHARD}', "PegawaiController@index");
Route::get("/formulir", "PegawaiController@formulir");
Route::post("/formulir/proses", "PegawaiController@proses");
Route::get("/pegawai", "PegawaiController@index");
Route::get("/pegawai/tambah", "PegawaiController@tambah");
Route::post("/pegawai/store", "PegawaiController@store");
Route::get("/pegawai/edit/{id}", "PegawaiController@edit");
Route::post("/pegawai/update", "PegawaiController@update");

//route blog
Route::get("/blog", "BlogController@homee");
Route::get("/blog/tentang", "BlogController@tentang");
Route::get("/blog/kontak", "BlogController@kontak");
