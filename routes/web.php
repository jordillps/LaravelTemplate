<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\HeaderController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TitleController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\LegalPageController;


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

//Web Contacts
Route::resource('/contacts', ContactFormController::class);

Auth::routes(['register' => false]);

//Admin
Route::group(['middleware' => ['auth']], function () {

    // Route::get('/emailverification', 'HomeController@emailverification')->name('emailverification');

	Route::group(["prefix" => "admin"], function() {
        Route::get('/', [HomeController::class, 'index'])->name('admin');

        //Users
        Route::resource('/users', UserController::class);
        Route::post('/change-password', [UserController::class, 'changePasswordSave'])->name('users.changePassword');
        Route::post('/users/storeMedia', [UserController::class, 'storeMedia'])->name('users.storeMedia');
        Route::delete('/users/{media}/deleteMedia', [UserController::class, 'deleteMedia'])->name('users.deleteMedia');

        //Posts
        Route::resource('/posts', PostController::class);
        Route::post('/posts/storeMedia', [PostController::class, 'storeMedia'])->name('posts.storeMedia');
        Route::delete('/posts/{media}/deleteMedia', [PostController::class, 'deleteMedia'])->name('posts.deleteMedia');

        //Pages
        Route::resource('/pages', PageController::class);

        //Pages Components
        Route::resource('/headers', HeaderController::class);
        Route::post('/headers/storeMedia', [HeaderController::class, 'storeMedia'])->name('headers.storeMedia');
        Route::delete('/headers/{media}/deleteMedia', [HeaderController::class, 'deleteMedia'])->name('headers.deleteMedia');

        Route::resource('/abouts', AboutController::class);
        Route::post('/abouts/storeMedia', [AboutController::class, 'storeMedia'])->name('abouts.storeMedia');
        Route::delete('/abouts/{media}/deleteMedia', [AboutController::class, 'deleteMedia'])->name('abouts.deleteMedia');

        Route::resource('/services', ServiceController::class);
        Route::post('/services/storeMedia', [ServiceController::class, 'storeMedia'])->name('services.storeMedia');
        Route::delete('/services/{media}/deleteMedia', [ServiceController::class, 'deleteMedia'])->name('services.deleteMedia');

        Route::resource('/titles', TitleController::class);

        //Projects
        Route::resource('/projects', ProjectController::class);
        Route::post('/projects/storeMedia', [ProjectController::class, 'storeMedia'])->name('projects.storeMedia');
        Route::delete('/projects/{media}/deleteMedia', [ProjectController::class, 'deleteMedia'])->name('projects.deleteMedia');

        //Contacts
        Route::group(["prefix" => "contacts-list"], function() {
            Route::get('/', [ContactController::class, 'index'])->name('contacts-list.index');
            Route::delete('/{id}', [ContactController::class, 'destroy'])->name('contacts-list.destroy');
        });

        //Categories
        Route::resource('/categories', CategoryController::class);

        //Tags
        Route::resource('/tags', TagController::class);

        //LegalPages
        Route::resource('/legal-pages', LegalPageController::class);
    });
});


Route::resource('post', App\Http\Controllers\PostController::class)->only('index', 'store');

Route::resource('category', App\Http\Controllers\CategoryController::class)->only('index');

Route::resource('tag', App\Http\Controllers\TagController::class)->only('index');


