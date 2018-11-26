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


Route::group(['namespace'=>'home','middleware'=>['web']],function (){
    Route::get('/','IndexController@index');
    Route::get('/contact','ContactUsController@index');

    Route::get('/news','NewsController@index');
    Route::get('/news/detail/{id?}','NewsController@detail');

    Route::get('/partner','PartnerController@index');

    Route::get('/product/{id?}','ProductController@index');
    Route::get('/product/detail/{id?}','ProductController@detail');

    Route::get('/aboutus','AboutUsController@index');
    Route::get('/aboutus/vam','AboutUsController@vam');
    Route::get('/aboutus/team','AboutUsController@team');


});