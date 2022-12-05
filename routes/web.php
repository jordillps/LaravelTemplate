<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\HeaderController;


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

Route::get('/', [WelcomeController::class,'index'])->name('home');

Route::get('locale/{locale}', [LocalizationController::class,'setLocale'])->name('setLocale');

Auth::routes(['register' => false]);

//Admin
Route::group(['middleware' => ['auth']], function () {

    // Route::get('/emailverification', 'HomeController@emailverification')->name('emailverification');

	Route::group(["prefix" => "admin"], function() {
        Route::get('/', [HomeController::class, 'index'])->name('admin');
        Route::resource('/users', UserController::class);
        Route::resource('/posts', PostController::class);
        Route::post('/posts/storeMedia', [PostController::class, 'storeMedia'])->name('posts.storeMedia');
        Route::delete('/media/{media}/deleteMedia', [PostController::class, 'deleteMedia'])->name('media.deleteMedia');
        //Pages
        Route::resource('/pages', PageController::class);
        //Pages Components
        Route::resource('/headers', HeaderController::class);
        Route::post('/headers/storeMedia', [HeaderController::class, 'storeMedia'])->name('headers.storeMedia');
        Route::delete('/media/{media}/deleteMedia', [HeaderController::class, 'deleteMedia'])->name('media.deleteMedia');
    });
});


Route::resource('post', App\Http\Controllers\PostController::class)->only('index', 'store');

Route::resource('category', App\Http\Controllers\CategoryController::class)->only('index');

Route::resource('tag', App\Http\Controllers\TagController::class)->only('index');


