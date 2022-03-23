<?php

namespace App\Http\Controllers;

use App\Http\Resources\NewsCollection;
use App\Models\News;
use App\Models\News_i18n;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public $languages = ['ru', 'kz', 'en'];

    public function total()
    {
        $count = News::where('is_active', true)->count();

        return view('news', ['total' => $count]);
    }

    public function all(): JsonResponse
    {
        return response()->json(NewsCollection::collection(News::where('is_active', true)->orderBy('published_at', 'desc')->take(4)->get()));
    }

    public function slide(): JsonResponse
    {
        $collection = NewsCollection::collection(News::where('is_active', true)->orderBy('published_at', 'desc')->get());
        $chunks = $collection->chunk(2);
        return response()->json($chunks->all());
    }

    public function loadMore(int $id): JsonResponse
    {
        return response()->json(
            NewsCollection::collection(News::where('is_active', true)->where('id', '<', $id)->orderBy('published_at', 'desc')->take(4)->get())
        );
    }

    public function index()
    {
        $news = News::all();
        return view('admin.news.list', ['news' => $news]);
    }

    public function create(){
        $news = News::all();
        return view('admin.news.create', ['news' => $news]);
    }

    public function store(Request $request){
        $request->validate([
            'title_ru' => 'required',
            'title_kz' => 'required',
            'title_en' => 'required',
            'description_ru' => 'required',
            'description_kz' => 'required',
            'description_en' => 'required',
            'image' => 'image|required|max:10000',
            'published_at' => 'required'
        ]);

        $news = new News();
        $news->is_active = true;
        $news->published_at = $request->published_at;
        $news->image = $request->file('image')->store('news', 'public');
        $news->save();

        foreach ($this->languages as $language){
            $news->i18n()->save(
                new News_i18n([
                    'locale' => $language,
                    'title' => $request['title_'.$language],
                    'description' => $request['description_'.$language]
                ])
            );
        }

        return redirect('/admin/news')->with(['message' => 'Успешно добавлено', 'alert' => 'alert-success']);
    }

    public function show(int $id)
    {
        $news = News::find($id);
        if (!$news) abort(404);

        $related_news = News::where('is_active', true)->take(2)->get();

        return view('news_content', ['news' => $news, 'related_news' => $related_news]);
    }

    public function edit($id)
    {
        $news = News::find($id);
        if (!$news) abort(404);

        return view('admin.news.update', ['news' => $news]);
    }

    public function update(Request $request, $id){
        $news = News::find($id);
        if (!$news) abort(404);

        $request->validate([
            'title_ru' => 'required',
            'title_kz' => 'required',
            'title_en' => 'required',
            'description_ru' => 'required',
            'description_kz' => 'required',
            'description_en' => 'required',
            'published_at' => 'required'
        ]);

        if ($request->has('image')){
            $request->validate([
                'image' => 'image|required|max:10000',
            ]);
            Storage::disk('public')->delete($news->image);
            $news->image = $request->file('image')->store('news', 'public');
        }

        foreach ($news->i18n as $translate){
            foreach ($this->languages as $language) {
                if ($translate->locale === $language){
                    $translate->title = $request['title_' . $language];
                    $translate->description = $request['description_' . $language];
                    $translate->save();
                }
            }
        }

        $news->published_at = $request->published_at;
        $news->save();

        return redirect('/admin/news')->with(['message' => 'Успешно обновлено', 'alert' => 'alert-success']);
    }

    public function activate($id){
        $news = News::find($id);
        if (!$news) abort(404);

        $news->is_active = !$news->is_active;
        $news->save();

        return redirect('/admin/news')->with(['message' => 'Статус изменен', 'alert' => 'alert-success']);
    }

    public function destroy($id){
        $news = News::find($id);
        if (!$news) abort(404);
        Storage::disk('public')->delete($news->image);

        $news->i18n()->delete();
        $news->delete();

        return redirect('/admin/news')->with(['message' => 'Новость удалена', 'alert' => 'alert-success']);
    }
}
