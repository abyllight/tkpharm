<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;
use Spatie\TranslationLoader\LanguageLine;

class LandingController extends Controller
{
    public function index()
    {
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
    }

    public function about(): JsonResponse
    {
        $locale = App::currentLocale();
        $t1 = LanguageLine::where('group', 'company')->where('key', 'title_1')->first();
        $s1 = LanguageLine::where('group', 'company')->where('key', 'subtitle_1')->first();
        $t2 = LanguageLine::where('group', 'company')->where('key', 'title_2')->first();
        $s2 = LanguageLine::where('group', 'company')->where('key', 'subtitle_2')->first();
        $t3 = LanguageLine::where('group', 'company')->where('key', 'title_3')->first();
        $s3 = LanguageLine::where('group', 'company')->where('key', 'subtitle_3')->first();
        $news = [
            'ru' => 'Новости',
            'kz' => 'Жаңалықтар',
            'en' => 'News'
        ];

        $read = [
            'ru' => 'Читать далее',
            'kz' => 'Толығырақ',
            'en' => 'Read more'
        ];

        $show = [
            'ru' => 'Показать больше',
            'kz' => 'Көбірек көрсету',
            'en' => 'Show more'
        ];
        $arr = [
            [
                'id' => 0,
                'title' => $t1->text[$locale],
                'sub' => $s1->text[$locale]
            ],
            [
                'id' => 1,
                'title' => $t2->text[$locale],
                'sub' => $s2->text[$locale]
            ],
            [
                'id' => 2,
                'title' => $t3->text[$locale],
                'sub' => $s3->text[$locale]
            ]
        ];

        return response()->json([
            'data' => $arr,
            'news' => $news[$locale],
            'read' => $read[$locale],
            'show' => $show[$locale]
        ]);
    }
}
