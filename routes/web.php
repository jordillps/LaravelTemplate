<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;

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
    return view('welcome');
});

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Auth::routes();

//Admin
Route::group(['middleware' => ['auth']], function () {

    // Route::get('/emailverification', 'HomeController@emailverification')->name('emailverification');

	Route::group(["prefix" => "admin"], function() {
        Route::get('/', [HomeController::class, 'index'])->name('admin');
        Route::get('/users', [UserController::class, 'index'])->name('users');
    });
});


Route::resource('post', App\Http\Controllers\PostController::class)->only('index', 'store');

Route::resource('category', App\Http\Controllers\CategoryController::class)->only('index');

Route::resource('tag', App\Http\Controllers\TagController::class)->only('index');


