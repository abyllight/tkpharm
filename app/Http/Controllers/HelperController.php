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
