<?php


    Route::group(['prefix'=>'admin','namespace'=>'Admin','midlleware'=>['web']],function (){
        Route::get('/login','LoginController@login');
        Route::post('/login/post','LoginController@loginPost');
    });

    Route::group(['prefix'=>'admin','namespace'=>'Admin','midlleware'=>['web','login']],function (){
       Route::get('/index','IndexController@index');
       Route::get('/product','ProductController@ProductList');
    });
