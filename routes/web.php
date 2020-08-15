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

Route::get('/', function ($id = null) {
    $categories = App\Category::all();
    $category = App\Category::find($id);
    $posts = App\Post::all()->take(4);
    return view('index',compact('categories','posts','category'));
})->name('index');

Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('products', 'ProductController@categoryindex')->name('products');
Route::get('products/{id}/details', 'ProductController@productdetails')->name('productsdetails');

Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/blog/{id}', 'BlogController@show')->name('blog.show');

Route::post('/orders/checkout', 'ClientOrderController@checkout')->name('orders.checkout');
Route::post('/orders/store', 'ClientOrderController@store')->name('orders.store');

Route::get('categories/{id}', 'ProductController@getCategory')->name('category.index');


Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');
