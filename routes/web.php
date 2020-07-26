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
    $categories = App\Category::all();
    $posts = App\Post::all()->take(4);
    return view('index',compact('categories','posts'));
})->name('index');

Route::get('/about', 'AboutController@index')->name('about');
Route::get('/contact', 'AboutController@index')->name('contact');
Route::get('products', 'ProductController@categoryindex')->name('products');
Route::get('products/{id}/details', 'ProductController@productdetails')->name('productsdetails');


Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');
