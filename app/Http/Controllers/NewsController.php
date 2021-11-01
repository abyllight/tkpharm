<?php

namespace App\Http\Controllers;

use App\Http\Resources\NewsCollection;
use App\Models\News;
use Illuminate\Http\JsonResponse;

class NewsController extends Controller
{
    public function index()
    {
        $count = News::all()->count();

        return view('news', ['total' => $count]);
    }

    public function all(): JsonResponse
    {
        return response()->json(NewsCollection::collection(News::orderBy('id', 'desc')->take(4)->get()));
    }

    public function slide(): JsonResponse
    {
        $collection = NewsCollection::collection(News::orderBy('id', 'desc')->get());
        $chunks = $collection->chunk(2);
        //dd($chunks->all());
        return response()->json($chunks->all());
    }

    public function show(int $id)
    {
        $news = News::find($id);
        if (!$news) abort(404);

        $related_news = News::take(2)->get();

        return view('news_content', ['news' => $news, 'related_news' => $related_news]);
    }

    public function loadMore(int $id): JsonResponse
    {
        return response()->json(
            NewsCollection::collection(News::where('id', '<', $id)->orderBy('id', 'desc')->take(4)->get())
        );
    }
}
