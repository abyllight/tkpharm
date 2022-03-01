<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;
use Spatie\TranslationLoader\LanguageLine;

class LandingController extends Controller
{
    public function index()
    {
        $locale = App::currentLocale();
        $hero_bg = LanguageLine::where('group', 'hero')->where('key', 'image')->first() ?? null;
        $partners_bg = LanguageLine::where('group', 'partners')->where('key', 'image')->first() ?? null;
        $partners_title_1 = LanguageLine::where('group', 'partners')->where('key', 'title_1')->first() ?? null;
        $partners_title_2 = LanguageLine::where('group', 'partners')->where('key', 'title_2')->first() ?? null;
        $partners_link_1 = LanguageLine::where('group', 'partners')->where('key', 'link_1')->first() ?? null;
        $partners_link_2 = LanguageLine::where('group', 'partners')->where('key', 'link_2')->first() ?? null;
        $t1 = LanguageLine::where('group', 'company')->where('key', 'title_1')->first();
        $s1 = LanguageLine::where('group', 'company')->where('key', 'subtitle_1')->first();
        $t2 = LanguageLine::where('group', 'company')->where('key', 'title_2')->first();
        $s2 = LanguageLine::where('group', 'company')->where('key', 'subtitle_2')->first();
        $t3 = LanguageLine::where('group', 'company')->where('key', 'title_3')->first();
        $s3 = LanguageLine::where('group', 'company')->where('key', 'subtitle_3')->first();

        return view('welcome', [
            'hero_bg' => $hero_bg ? $hero_bg->text['image'] : null,
            'partners_bg' => $partners_bg ? $partners_bg->text['image'] : null,
            'partners_title_1' => $partners_title_1 ? $partners_title_1->text['title'] : null,
            'partners_title_2' => $partners_title_2 ? $partners_title_2->text['title'] : null,
            'partners_link_1' =>  $partners_link_1 ? $partners_link_1->text['link'] : null,
            'partners_link_2' => $partners_link_2 ? $partners_link_2->text['link'] : null,
            't1' => $t1->text[$locale],
            's1' => $s1->text[$locale],
            't2' => $t2->text[$locale],
            's2' => $s2->text[$locale],
            't3' => $t3->text[$locale],
            's3' => $s3->text[$locale]
        ]);
    }

    public function about()
    {
        $locale = App::currentLocale();
        $t1 = LanguageLine::where('group', 'company')->where('key', 'title_1')->first();
        $s1 = LanguageLine::where('group', 'company')->where('key', 'subtitle_1')->first();
        $t2 = LanguageLine::where('group', 'company')->where('key', 'title_2')->first();
        $s2 = LanguageLine::where('group', 'company')->where('key', 'subtitle_2')->first();
        $t3 = LanguageLine::where('group', 'company')->where('key', 'title_3')->first();
        $s3 = LanguageLine::where('group', 'company')->where('key', 'subtitle_3')->first();

        return view('about', [
            't1' => $t1->text[$locale],
            's1' => $s1->text[$locale],
            't2' => $t2->text[$locale],
            's2' => $s2->text[$locale],
            't3' => $t3->text[$locale],
            's3' => $s3->text[$locale]
        ]);
    }

    public function tr(): JsonResponse
    {
        $locale = App::currentLocale();

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

        return response()->json(
            [
                'news' => $news[$locale],
                'read' => $read[$locale],
                'show' => $show[$locale]
            ]
        );
    }
}
