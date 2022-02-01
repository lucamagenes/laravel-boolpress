<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('home', 'PageController@index')->name('home');
Route::get('about', 'PageController@show')->name('about');

Route::get('contacts', 'ContactController@show_contact_page')->name('contacts');
Route::post('contacts', 'ContactController@store')->name('contacts.send');


Auth::routes(['register' => false]);

Route::get('categories/{category:slug}/posts', 'CategoryController@posts')->name('categories.posts');
Route::get('tags/{tag:slug}/posts', 'TagController@posts')->name('tags.posts');

Route::resource('products', ProductController::class)->only(['index', 'show']);
Route::resource('posts', PostController::class)->only(['index', 'show'])->parameter('post', 'post:slug');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagController::class);
    Route::resource('contacts', ContactController::class)->only('index', 'show', 'destroy');

});


