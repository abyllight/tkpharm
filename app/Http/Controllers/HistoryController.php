<?php

namespace App\Http\Controllers;

use App\Http\Resources\HistoryCollection;
use App\Models\History;
use App\Models\History_i18n;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public $languages = ['ru', 'kz', 'en'];

    public function sample()
    {
        return response()->json(HistoryCollection::collection(History::where('is_visible', true)->get()));
    }

    public function all()
    {
        return response()->json(HistoryCollection::collection(History::all()));
    }

    public function index()
    {
        $histories = History::all();
        return view('admin.histories.list', ['histories' => $histories]);
    }


    public function create()
    {
        return view('admin.histories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required',
            'title_ru' => 'required',
            'title_kz' => 'required',
            'title_en' => 'required',
            'description_ru' => 'required',
            'description_kz' => 'required',
            'description_en' => 'required'
        ]);

        $history = new History();
        $history->year = $request->year;
        $history->is_visible = true;
        $history->save();

        foreach ($this->languages as $language){
            $history->i18n()->save(
                new History_i18n([
                    'locale' => $language,
                    'title' => $request['title_'.$language],
                    'description' => $request['description_'.$language]
                ])
            );
        }

        return redirect('/admin/histories')->with(['message' => 'Успешно добавлено', 'alert' => 'alert-success']);
    }

    public function edit($id)
    {
        $history = History::find($id);
        if (!$history) abort(404);

        return view('admin.histories.update', ['history' => $history]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'year' => 'required',
            'title_ru' => 'required',
            'title_kz' => 'required',
            'title_en' => 'required',
            'description_ru' => 'required',
            'description_kz' => 'required',
            'description_en' => 'required'
        ]);

        $history = History::find($id);
        if (!$history) abort(404);

        $history->year = $request->year;
        $history->is_visible = $request->is_visible === 'on' ? true : false;

        foreach ($history->i18n as $translate){
            foreach ($this->languages as $language) {
                if ($translate->locale === $language){
                    $translate->title = $request['title_' . $language];
                    $translate->description = $request['description_' . $language];
                    $translate->save();
                }
            }
        }

        $history->save();

        return redirect('/admin/histories')->with(['message' => 'Успешно обновлено', 'alert' => 'alert-success']);
    }

    public function destroy($id)
    {
        $history = History::find($id);
        if (!$history) abort(404);

        $history->i18n()->delete();
        $history->delete();

        return redirect('/admin/histories')->with(['message' => 'История удалена', 'alert' => 'alert-success']);
    }
}
