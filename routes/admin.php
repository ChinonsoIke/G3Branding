<?php

/*
|
|---------------------------------------------------------
| ADMINISTRATORS ROUTES
|---------------------------------------------------------
|
*/

Route::group(['middleware' => 'auth:admin'], function() {

    //Dashboard
    Route::get('', 'DashboardController@index')->name('dashboard');

    //Administrators
    Route::group(['prefix' => 'administrators', 'as' => 'administrators.'], function () {
        Route::get('', 'AdministratorsController@index')->name('index');
        Route::get('details/{administrator}', 'AdministratorsController@details')->name('details');
        Route::post('create', 'AdministratorsController@create')->name('create');
    });

    //Users
    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('', 'UsersController@index')->name('index');
        Route::get('details/{user}', 'UsersController@details')->name('details');
    });

    //Category
    Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
        Route::get('', 'CategoryController@index')->name('index');
        Route::post('create', 'CategoryController@create')->name('create');
        Route::get('details/{category}', 'CategoryController@details')->name('details');
        Route::post('update/{category}', 'CategoryController@update')->name('update');
        Route::post('update-price', 'CategoryController@updatePrice')->name('update.price');
        Route::post('create-price/{category}', 'CategoryController@createPrice')->name('create.price');
        Route::get('delete-price/{id}', 'CategoryController@deletePrice')->name('delete.price');
    });

    //Order
    Route::group(['prefix' => 'orders', 'as' => 'orders.'], function () {
        Route::get('', 'OrderController@index')->name('index');
        Route::get('details/{order}', 'OrderController@details')->name('details');
        Route::get('update/order/{order}/status/{status}', 'OrderController@updateStatus')->name('update.status');
    });


    //FAQ
    Route::group(['prefix' => 'faqs', 'as' => 'faqs.'], function () {
        Route::get('', 'FaqController@index')->name('index');
        Route::post('create', 'FaqController@create')->name('create');
        Route::post('update/{faq}', 'FaqController@update')->name('update');
        Route::get('delete/{faq}', 'FaqController@delete')->name('delete');
    });

    //Testimonies
    Route::group(['prefix' => 'testimonies', 'as' => 'testimonies.'], function () {
        Route::get('', 'TestimoniesController@index')->name('index');
        Route::options('create', 'TestimoniesController@create')->name('create');
        Route::post('update/{testimony}', 'TestimoniesController@update')->name('update');
        Route::get('delete/{testimony}', 'TestimoniesController@delete')->name('delete');
    });

    //Pages
    Route::group(['prefix' => 'pages', 'as' => 'pages.'], function () {
        Route::get('', 'PagesController@index')->name('index');
        Route::post('create', 'PagesController@create')->name('create');
        Route::match(['get', 'post'],'update/{page}', 'PagesController@update')->name('update');
        Route::get('delete/{page}', 'PagesController@delete')->name('delete');
    });

    //Post
    Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
        Route::get('', 'PostsController@index')->name('index');
        Route::post('create', 'PostsController@create')->name('create');
        Route::match(['get', 'post'],'update/{post}', 'PostsController@update')->name('update');
        Route::get('delete/{post}', 'PostsController@delete')->name('delete');
    });

    //Roles and Permission
    Route::get('role','RolesController@index')->name('role.index');
    Route::post('role','RolesController@addRole')->name('role.store');
    Route::post('permission','RolesController@addPermission')->name('permission.store');
    Route::post('role/{role}/update','RolesController@updateRole')->name('role.update');
    Route::get('permission/delete/{permission}','RolesController@deletePermission')->name('permission.delete');

});

////Authentication
Route::group(['namespace' => 'Auth'], function() {
    Route::match(['get', 'post'],'login', 'LoginController@login')->name('login');
    Route::get('logout', 'LoginController@logout')->name('logout');
});
