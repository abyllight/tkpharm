<?php

use App\Http\Controllers\LocaleController;
use App\Http\Controllers\NewsController;
use App\Http\Resources\NewsCollection;
use App\Models\News;
use Illuminate\Support\Facades\App;
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

Route::view('/news', 'news');

Route::get('/news/{id}', [NewsController::class, 'show'])->name('news_content');

Route::view('/products', 'products');

Route::view('/gallery', 'gallery');

Route::get('/search', function () {
    return view('search_results');
});

Route::get('/news-slide', [NewsController::class, 'slide']);

Route::get('/news-all', [NewsController::class, 'index']);
Route::get('/news-load/{id}', [NewsController::class, 'loadMore']);
