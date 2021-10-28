<?php

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

Route::get('/locale/{locale}', function ($locale) {
    if (! in_array($locale, ['ru', 'kz', 'en'])) {
        abort(400);
    }

    session()->put('app_locale', $locale);
    return response()->json($locale);
});

Route::get('/locale', function () {
    $locale = [
        'name' => 'ru',
        'flag' => '/img/ru.png'
    ];

    if (App::currentLocale() === 'kz') {
        $locale = [
            'name' => 'kz',
            'flag' => '/img/kz.png'
        ];
    }

    if (App::currentLocale() === 'en') {
        $locale = [
            'name' => 'en',
            'flag' => '/img/en.png'
        ];
    }

    return response()->json($locale);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/certificates', function () {
    return view('certificates');
});

Route::get('/management', function () {
    return view('management');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/news/{id}', function ($id) {
    $news = News::find($id);
    if (!$news) abort(404);

    $related_news = News::take(2)->get();

    return view('news_content', ['news' => $news, 'related_news' => $related_news]);
})->name('news_content');

Route::get('/products', function () {
    return view('products');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/search', function () {
    return view('search_results');
});

Route::get('/news-all', function () {
    return NewsCollection::collection(News::orderBy('id', 'desc')->get());
});
