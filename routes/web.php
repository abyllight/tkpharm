<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Spatie\TranslationLoader\LanguageLine;

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

Route::get('/', function () {
    $hero_bg = LanguageLine::where('group', 'hero')->where('key', 'image')->first();
    $partners_bg = LanguageLine::where('group', 'partners')->where('key', 'image')->first();
    $partners_title_1 = LanguageLine::where('group', 'partners')->where('key', 'title_1')->first();
    $partners_title_2 = LanguageLine::where('group', 'partners')->where('key', 'title_2')->first();
    $partners_link_1 = LanguageLine::where('group', 'partners')->where('key', 'link_1')->first();
    $partners_link_2 = LanguageLine::where('group', 'partners')->where('key', 'link_2')->first();

    return view('welcome', [
        'hero_bg' => $hero_bg->text['image'],
        'partners_bg' => $partners_bg->text['image'],
        'partners_title_1' => $partners_title_1->text['title'],
        'partners_title_2' => $partners_title_2->text['title'],
        'partners_link_1' => $partners_link_1->text['link'],
        'partners_link_2' => $partners_link_2->text['link']
    ]);
});

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
Route::get('/gallery-all', [GalleryController::class, 'all']);

Route::get('/search', function () {
    return view('search_results');
});

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::view('/login', 'admin.login')->middleware('guest');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::view('/', 'admin.main.main');

    Route::get('/hero', [MainController::class, 'hero']);
    Route::post('/hero', [MainController::class, 'saveHero']);
    Route::get('/company', [MainController::class, 'company']);
    Route::post('/company', [MainController::class, 'saveCompany']);
    Route::get('/history', [MainController::class, 'history']);
    Route::post('/history', [MainController::class, 'saveHistory']);
    Route::get('/partners', [MainController::class, 'partners']);
    Route::post('/partners', [MainController::class, 'savePartners']);

    Route::resource('product-categories', ProductCategoryController::class)->except(['show']);
    Route::resource('products', ProductController::class)->except(['show']);
    Route::resource('news', NewsController::class);
    Route::resource('gallery', GalleryController::class)->except(['show', 'edit', 'update']);

    Route::post('products/status/{id}', [ProductController::class, 'activate']);
    Route::post('news/status/{id}', [NewsController::class, 'activate']);

    Route::get('/pwd', 'LoginController@pwd')->name('pwd');
    Route::post('/pwd', 'LoginController@pwdUpdate')->name('pwd.update');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

