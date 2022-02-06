<?php

namespace App\Http\Controllers;

use App\Models\News_i18n;
use Illuminate\Support\Facades\Artisan;

class HelperController extends Controller
{
    public function storage()
    {
        Artisan::call('storage:link');
    }

    public function scout()
    {
        Artisan::call('scout:import "App\Models\News_i18n"');
    }

    public function clear()
    {
        Artisan::call('config:clear');
        Artisan::call('config:cache');
    }

    public function getNewsI18n()
    {
        $news = News_i18n::all();

        $arr = [];

        foreach ($news as $item){
            $arr[] = [
                'id' => $item->id,
                'title' => $item->title,
                'description' => $item->description
            ];
        }

        return response()->json($arr, 200, [], JSON_UNESCAPED_UNICODE);
    }
}
