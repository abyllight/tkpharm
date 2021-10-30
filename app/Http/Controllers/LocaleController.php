<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocaleController extends Controller
{
    public function getLocale(): JsonResponse
    {
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

        return response()->json([
            'locale' => $locale
        ]);
    }

    public function setLocale(string $locale): JsonResponse
    {
        if (! in_array($locale, ['ru', 'kz', 'en'])) {
            abort(400);
        }

        session()->put('app_locale', $locale);
        return response()->json($locale);
    }
}
