<?php

namespace App\Http\Controllers;

use App\Http\Resources\CertificatesCollection;
use App\Models\Certificate;
use App\Models\Certificate_i18n;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public $languages = ['ru', 'kz', 'en'];

    public function all()
    {
        $certificates = Certificate::all();
        return view('certificates', ['certificates' => $certificates]);
    }

    public function index()
    {
        $certificates = Certificate::all();
        return view('admin.certificates.list', ['certificates' => $certificates]);
    }

    public function create(){
        return view('admin.certificates.create');
    }

    public function store(Request $request){
        $request->validate([
            'title_ru' => 'required',
            'title_kz' => 'required',
            'title_en' => 'required',
            'image' => 'image|required|max:10000'
        ]);

        $certificate = new Certificate();
        $certificate->image = $request->file('image')->store('certificates', 'public');
        $certificate->save();

        foreach ($this->languages as $language){
            $certificate->i18n()->save(
                new Certificate_i18n([
                    'locale' => $language,
                    'title' => $request['title_'.$language]
                ])
            );
        }

        return redirect('/admin/certificates')->with(['message' => 'Успешно добавлено', 'alert' => 'alert-success']);
    }

    public function edit($id)
    {
        $certificate = Certificate::find($id);
        if (!$certificate) abort(404);

        return view('admin.certificates.update', ['certificate' => $certificate]);
    }

    public function update(Request $request, $id){
        $certificate = Certificate::find($id);
        if (!$certificate) abort(404);

        $request->validate([
            'title_ru' => 'required',
            'title_kz' => 'required',
            'title_en' => 'required'
        ]);

        if ($request->has('image')){
            $request->validate([
                'image' => 'image|required|max:10000',
            ]);
            Storage::disk('public')->delete($certificate->image);
            $certificate->image = $request->file('image')->store('certificates', 'public');
        }

        foreach ($certificate->i18n as $translate){
            foreach ($this->languages as $language) {
                if ($translate->locale === $language){
                    $translate->title = $request['title_' . $language];
                    $translate->save();
                }
            }
        }

        $certificate->save();

        return redirect('/admin/certificates')->with(['message' => 'Успешно обновлено', 'alert' => 'alert-success']);
    }

    public function destroy($id){
        $certificate = Certificate::find($id);
        if (!$certificate) abort(404);
        Storage::disk('public')->delete($certificate->image);

        $certificate->i18n()->delete();
        $certificate->delete();

        return redirect('/admin/certificates')->with(['message' => 'Сертификат удален', 'alert' => 'alert-success']);
    }
}
