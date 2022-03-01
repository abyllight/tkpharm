<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\SearchController;
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

Route::get('/', [LandingController::class, 'index']);
Route::get('/about-data', [LandingController::class, 'tr']);

Route::get('/about', [LandingController::class, 'about']);

Route::view('/history', 'history');
Route::get('/history-sample', [HistoryController::class, 'sample']);
Route::get('/histories', [HistoryController::class, 'all']);

Route::get('/certificates', [CertificateController::class, 'all']);

Route::view('/management', 'management');

Route::get('/news', [NewsController::class, 'total']);
Route::get('/news-slide', [NewsController::class, 'slide']);
Route::get('/news-all', [NewsController::class, 'all']);
Route::get('/news-load/{id}', [NewsController::class, 'loadMore']);
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news_content');

Route::view('/products', 'products');
Route::get('/products-all', [ProductCategoryController::class, 'all']);

Route::view('/gallery', 'gallery');
Route::get('/gallery-all', [GalleryController::class, 'all']);

Route::view('/login', 'admin.login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/messages', [MessageController::class, 'store']);

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::view('/', 'admin.main.main');

    Route::get('/hero', [MainController::class, 'hero']);
    Route::post('/hero', [MainController::class, 'saveHero']);
    Route::get('/company', [MainController::class, 'company']);
    Route::post('/company', [MainController::class, 'saveCompany']);
    Route::get('/partners', [MainController::class, 'partners']);
    Route::post('/partners', [MainController::class, 'savePartners']);

    Route::resource('product-categories', ProductCategoryController::class)->except(['show']);
    Route::resource('products', ProductController::class)->except(['show']);
    Route::resource('news', NewsController::class);
    Route::resource('certificates', CertificateController::class)->except(['show']);
    Route::resource('histories', HistoryController::class)->except(['show']);
    Route::resource('gallery', GalleryController::class)->except(['show', 'edit', 'update']);

    Route::post('products/status/{id}', [ProductController::class, 'activate']);
    Route::post('news/status/{id}', [NewsController::class, 'activate']);

    Route::get('/messages', [MessageController::class, 'index']);
    Route::get('/messages/{id}', [MessageController::class, 'show']);

    Route::get('/pwd', 'LoginController@pwd')->name('pwd');
    Route::post('/pwd', 'LoginController@pwdUpdate')->name('pwd.update');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/linkstorage', [HelperController::class, 'storage']);
Route::get('/search-import', [HelperController::class, 'getNewsI18n']);
Route::get('/scout', [HelperController::class, 'scout']);

Route::get('/clear', [HelperController::class, 'clear']);


Route::get('/search', [SearchController::class, 'search']);


