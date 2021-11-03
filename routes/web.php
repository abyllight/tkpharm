<?php

use App\Http\Controllers\LocaleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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

Route::get('/locale/{locale}', [LocaleController::class, 'setLocale']);
Route::get('/locale', [LocaleController::class, 'getLocale']);

Route::view('/', 'welcome');

Route::view('/about', 'about');

Route::view('/history', 'history');

Route::view('/certificates', 'certificates');

Route::view('/management', 'management');

Route::get('/news', [NewsController::class, 'total']);
Route::get('/news-slide', [NewsController::class, 'slide']);
Route::get('/news-all', [NewsController::class, 'all']);
Route::get('/news-load/{id}', [NewsController::class, 'loadMore']);
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news_content');

Route::view('/products', 'products');
Route::get('/products-all', [ProductCategoryController::class, 'all']);

Route::view('/gallery', 'gallery');

Route::get('/search', function () {
    return view('search_results');
});

/*Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});*/

Route::view('/login', 'admin.login')->middleware('guest');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::resource('product-categories', ProductCategoryController::class)->except(['show']);
    Route::resource('products', ProductController::class)->except(['show']);
    Route::resource('news', NewsController::class);
    Route::post('products/status/{id}', [ProductController::class, 'activate']);
    Route::post('news/status/{id}', [NewsController::class, 'activate']);

    /*Route::get('/product/create', 'ProductController@create')->name('product.create');
    Route::post('/product/create', 'ProductController@store')->name('product.store');

    Route::get('/product/{id}/edit', 'ProductController@edit')->name('product.edit');
    Route::post('/product/{id}/edit', 'ProductController@update')->name('product.update');
    Route::post('/product/{id}/deactivate', 'ProductController@deactivate')->name('product.deactivate');
    Route::post('/product/{id}/activate', 'ProductController@activate')->name('product.activate');*/

    Route::get('/pwd', 'LoginController@pwd')->name('pwd');
    Route::post('/pwd', 'LoginController@pwdUpdate')->name('pwd.update');

    Route::get('/list', 'ListController@index')->name('list');
    Route::post('/list', 'ListController@fetchOrders')->name('fetch');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

