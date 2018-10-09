<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//ini rutenya peternakan
route::get('/index','distribusiController@index');
route::get('/index/tambah','distribusiController@create');
route::post('/index/store','distribusiController@store');
route::get('/index/edit/{id}','distribusiController@edit');
route::post('/index/update/{id}','distribusiController@update');
route::get('/index/destroy/{id}','distribusiController@destroy');

//ini tujuans
route::get('/indextujuan','TujuanContoller@index');
route::get('/indextujuan/tambah','TujuanContoller@create');
route::post('/indextujuan/store','TujuanContoller@store');
route::get('/indextujuan/edit/{id}','TujuanContoller@edit');
route::post('/indextujuan/update/{id}','TujuanContoller@update');
route::get('/indextujuan/destroy/{id}','TujuanContoller@destroy');

//ini distribusi
route::get('/indexdistribusi','PendistribusianContoller@index');
route::get('/tambahdistribusi','PendistribusianContoller@create');
route::post('/tambahdistribusi/store','PendistribusianContoller@store');
route::get('/tambahdistribusi/edit/{id}','PendistribusianContoller@edit');
route::post('/tambahdistribusi/update/{id}','PendistribusianContoller@update');
route::get('/tambahdistribusi/destroy/{id}','PendistribusianContoller@destroy');

//ini lakukan distribusi
route::get('/indexlakukandistribusi','DistribusiSapiController@index');
route::get('/indexkambingdistribusi','DistribusiKambingController@index');

//ini laporan
route::get('/laporan','ChartsController@index');

//ini perhitungan
route::post('/indexperhitungankambing','perhitunganController@getVam');

//ini flash message
Route::get('/pesan', 'FlashMessageController@index');
Route::get('/get-pesan', 'FlashMessageController@pesan');

//
// Route::get('/a', 'afterLoginController@index');
//
// Route::get('/p', 'laporanController@index' );
//
// Route::get('/bar-chart', 'ChartController@index');
// Route::group(['middleware'=>'web'], function(){
//
//   Route::group(['prefix'=>'peternakan','middleware'=>['auth'] ,function(){
//     Route::resource('distribusi','distribusiController');
//   }]);
//
// });
