<?php

Route::get('/dashboard', 'dashboardController@index');

Route::resource('/showNews', 'newsController');

Route::get('/createNews', 'newsController@create');

Route::post('/showNews', 'newsController@store');

Route::post('/showNews/{id}', 'newsController@show');

Route::delete('/showNews/{id}/delete', 'newsController@destroy');

Route::get('users/{id}','userController@show');

Route::group(['middleware' => ['role','auth']], function()
{
    Route::resource('users', 'userController');

    Route::post('/users/{id}/update', 'userController@update');

    Route::delete('/users/{id}/delete', 'userController@destroy');

    Route::post('/newsCategory', 'newsCategoryController@store');

    Route::post('/newsCategory/{id}', 'newsCategoryController@edit');

    Route::post('/newsCategory/{id}/update', 'newsCategoryController@update');

    Route::resource('/newsCategory', 'newsCategoryController');

    Route::delete('/newsCategory/{id}/delete', 'newsCategoryController@destroy');
});

Route::get('/', 'frontController@index')->name('index');

Route::resource('/index', 'frontController');

Route::get('index/{id}', 'frontController@show)');

Route::resource('/videoList', 'videosController');

Route::get('/createVideo', 'videosController@create');

Route::post('/createVideo', 'videosController@store');

Route::resource('/videoList', 'videosController');

Route::post('/videoList/{id}/edit', 'videosController@edit');

Route::delete('/videoList/{id}/delete', 'videosController@destroy');

Route::post('/videoList/{id}/update', 'videosController@update');

Route::get('/category/{id}', 'frontController@forAll');

Route::get('/category/index/{id}', 'frontController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/photo',function (){
    return view('dashboard.photo.photo');
});
Route::post('photoUpload','newsController@photo');

Route::post('subscription' , 'SubscriptionController@store');


