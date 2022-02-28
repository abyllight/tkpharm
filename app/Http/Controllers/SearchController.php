<?php

namespace App\Http\Controllers;

use App\Models\News_i18n;
use App\Models\Product_i18n;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $news = News_i18n::search($request->search)->get()->groupBy('news_id');
        $products = Product_i18n::search($request->search)->get()->groupBy('product_id');

        $news_arr = $this->formatNewsResult($news);
        $products_arr = $this->formatProductsResult($products);

        return response()->json([
            'status' => true,
            'news' => $news_arr,
            'products' => $products_arr
        ]);
    }

    public function formatNewsResult($results): array
    {
        if ($results->count() === 0){
            return [];
        }

        $arr = [];

        foreach ($results as $result){
            $first = $result->first();

            $arr[] = [
                'id' => $first->news_id,
                'title' => $first->title,
                'link' => '/news/' . $first->news_id
            ];
        }

        return $arr;
    }

    public function formatProductsResult($results): array
    {
        if ($results->count() === 0){
            return [];
        }

        $arr = [];

        foreach ($results as $result){
            $first = $result->first();

            $arr[] = [
                'id' => $first->product_id,
                'title' => $first->title,
                'link' => '/products'
            ];
        }

        return $arr;
    }
}
