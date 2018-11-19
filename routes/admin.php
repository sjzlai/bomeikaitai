<?php


    Route::group(['prefix'=>'admin','namespace'=>'Admin','midlleware'=>['web']],function (){
        Route::get('/login','LoginController@login');
        Route::post('/login/post','LoginController@loginPost');
    });

    Route::group(['prefix'=>'admin','namespace'=>'Admin','midlleware'=>['web','login']],function (){
       Route::get('/index','IndexController@index');
       //产品管理
       Route::get('/product','ProductController@ProductList');
       Route::get('/product/create','ProductController@create');
       Route::post('/product/store','ProductController@store');
       Route::get('/product/imgview/{goods_id}','ProductController@imgView');
       Route::post('/product/imgStore','ProductController@imgStore');
       Route::get('product/edit/{id?}','ProductController@edit');
       Route::post('/product/editStore','ProductController@update');
       Route::get('product/del/{id?}','ProductController@del');
       //产品图片管理
        Route::get('/img','ImgController@index');

       //新闻管理
        Route::any('/news','NewsController@index');
        Route::get('/news/create','NewsController@create');
        Route::post('/news/store','NewsController@store');
        Route::get('news/edit/{id?}','NewsController@edit');
        Route::post('news/editStore','NewsController@update');
        Route::get('news/del/{id?}','NewsController@del');

        //公司管理
        Route::any('company','CompanyController@index');
        Route::any('company/create','CompanyController@create');
        Route::any('company/store','CompanyController@store');
        Route::get('company/edit/{id?}','CompanyController@edit');
        Route::post('company/editStore','CompanyController@update');
        Route::get('company/del/{id?}','CompanyController@del');


        //企业愿景
        Route::any('vision','VisionController@index');
        Route::any('vision/create','VisionController@create');
        Route::any('vision/store','VisionController@store');
        Route::get('vision/edit/{id?}','VisionController@edit');
        Route::post('vision/editStore','VisionController@update');
        Route::get('vision/del/{id?}','VisionController@del');
    });
