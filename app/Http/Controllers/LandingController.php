<?php

namespace App\Http\Controllers;

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
}
