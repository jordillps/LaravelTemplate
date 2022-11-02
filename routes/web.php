<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

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

// Route::get('locale/{locale}', [App\Http\Controllers\LocalizationController::class, 'setLocale'])->name('setLocale');

Route::get('/admin', [HomeController::class, 'index'])->name('admin');


Route::resource('post', App\Http\Controllers\PostController::class)->only('index', 'store');

Route::resource('categoy', App\Http\Controllers\CategoyController::class)->only('index');

Route::resource('tag', App\Http\Controllers\TagController::class)->only('index');


