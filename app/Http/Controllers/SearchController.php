<?php

namespace App\Http\Controllers;

use App\Models\News_i18n;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $results = News_i18n::search($request->search)->get()->groupBy('news_id');

        $arr = $this->formatSearchResult($results);

        return response()->json([
            'status' => true,
            'data' => $arr
        ]);
    }

    public function formatSearchResult($results): array
    {
        if ($results->count() === 0){
            return [];
        }

        $arr = [];

        foreach ($results as $result){
            $first = $result->first();

            $arr[] = [
                'id' => $first->news_id,
                'title' => $first->title
            ];
        }

        return $arr;
    }
}
