<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\TranslationLoader\LanguageLine;

class MainController extends Controller
{
    public function hero(){
        $hero = LanguageLine::where('group', 'hero')->get();

        $hero = [
            'title_ru' => $hero[0]->text['ru'],
            'title_kz' => $hero[0]->text['kz'],
            'title_en' => $hero[0]->text['en'],
            'subtitle_ru' => $hero[1]->text['ru'],
            'subtitle_kz' => $hero[1]->text['kz'],
            'subtitle_en' => $hero[1]->text['en'],
            'image' => $hero[2]->text['image']
        ];

        return view('admin.main.hero', ['hero' => $hero]);
    }

    public function saveHero(Request $request)
    {
        $request->validate([
            'title_ru' => 'required',
            'title_kz' => 'required',
            'title_en' => 'required',
            'subtitle_ru' => 'required',
            'subtitle_kz' => 'required',
            'subtitle_en' => 'required',
        ]);

        LanguageLine::updateOrCreate(
            ['group' => 'hero', 'key' => 'title'],
            [
                'text' => [
                    'ru' => $request->title_ru,
                    'kz' => $request->title_kz,
                    'en' => $request->title_en
                ]
            ]
        );

        LanguageLine::updateOrCreate(
            ['group' => 'hero', 'key' => 'subtitle'],
            [
                'text' => [
                    'ru' => $request->subtitle_ru,
                    'kz' => $request->subtitle_kz,
                    'en' => $request->subtitle_en
                ]
            ]
        );

        if ($request->has('image')){
            $request->validate([
                'image' => 'image|mimes:jpeg,jpg,png|required|max:10000',
            ]);

            $image = LanguageLine::where('group', 'hero')->where('key', 'image')->first();

            if ($image) {
                Storage::disk('public')->delete($image->text);

            }

            LanguageLine::updateOrCreate(
                ['group' => 'hero', 'key' => 'image'],
                ['text' => [
                    'image' => $request->file('image')->store('hero', 'public')
                ]]
            );
        }

        return redirect('/admin/')->with(['message' => 'Успешно добавлено', 'alert' => 'alert-success']);
    }

    public function company(){
        $company = LanguageLine::where('group', 'company')->get();

        $company = [
            'title_1_ru' => $company[0]->text['ru'],
            'title_1_kz' => $company[0]->text['kz'],
            'title_1_en' => $company[0]->text['en'],
            'subtitle_1_ru' => $company[1]->text['ru'],
            'subtitle_1_kz' => $company[1]->text['kz'],
            'subtitle_1_en' => $company[1]->text['en'],
            'title_2_ru' => $company[2]->text['ru'],
            'title_2_kz' => $company[2]->text['kz'],
            'title_2_en' => $company[2]->text['en'],
            'subtitle_2_ru' => $company[3]->text['ru'],
            'subtitle_2_kz' => $company[3]->text['kz'],
            'subtitle_2_en' => $company[3]->text['en'],
            'title_3_ru' => $company[4]->text['ru'],
            'title_3_kz' => $company[4]->text['kz'],
            'title_3_en' => $company[4]->text['en'],
            'subtitle_3_ru' => $company[5]->text['ru'],
            'subtitle_3_kz' => $company[5]->text['kz'],
            'subtitle_3_en' => $company[5]->text['en'],
        ];

        return view('admin.main.company', ['company' => $company]);
    }

    public function saveCompany(Request $request)
    {
        $request->validate([
            'company_title_1_ru' => 'required',
            'company_title_1_kz' => 'required',
            'company_title_1_en' => 'required',
            'company_title_2_ru' => 'required',
            'company_title_2_kz' => 'required',
            'company_title_2_en' => 'required',
            'company_title_3_ru' => 'required',
            'company_title_3_kz' => 'required',
            'company_title_3_en' => 'required',
            'company_subtitle_1_ru' => 'required',
            'company_subtitle_1_kz' => 'required',
            'company_subtitle_1_en' => 'required',
            'company_subtitle_2_ru' => 'required',
            'company_subtitle_2_kz' => 'required',
            'company_subtitle_2_en' => 'required',
            'company_subtitle_3_ru' => 'required',
            'company_subtitle_3_kz' => 'required',
            'company_subtitle_3_en' => 'required',
        ]);

        LanguageLine::updateOrCreate(
            ['group' => 'company', 'key' => 'title_1'],
            [
                'text' => [
                    'ru' => $request->company_title_1_ru,
                    'kz' => $request->company_title_1_kz,
                    'en' => $request->company_title_1_en
                ]
            ]
        );

        LanguageLine::updateOrCreate(
            ['group' => 'company', 'key' => 'title_2'],
            [
                'text' => [
                    'ru' => $request->company_title_2_ru,
                    'kz' => $request->company_title_2_kz,
                    'en' => $request->company_title_2_en
                ]
            ]
        );

        LanguageLine::updateOrCreate(
            ['group' => 'company', 'key' => 'title_3'],
            [
                'text' => [
                    'ru' => $request->company_title_3_ru,
                    'kz' => $request->company_title_3_kz,
                    'en' => $request->company_title_3_en
                ]
            ]
        );

        LanguageLine::updateOrCreate(
            ['group' => 'company', 'key' => 'subtitle_1'],
            [
                'text' => [
                    'ru' => $request->company_subtitle_1_ru,
                    'kz' => $request->company_subtitle_1_kz,
                    'en' => $request->company_subtitle_1_en
                ]
            ]
        );

        LanguageLine::updateOrCreate(
            ['group' => 'company', 'key' => 'subtitle_2'],
            [
                'text' => [
                    'ru' => $request->company_subtitle_2_ru,
                    'kz' => $request->company_subtitle_2_kz,
                    'en' => $request->company_subtitle_2_en
                ]
            ]
        );

        LanguageLine::updateOrCreate(
            ['group' => 'company', 'key' => 'subtitle_3'],
            [
                'text' => [
                    'ru' => $request->company_subtitle_3_ru,
                    'kz' => $request->company_subtitle_3_kz,
                    'en' => $request->company_subtitle_3_en
                ]
            ]
        );

        return redirect('/admin/')->with(['message' => 'Успешно добавлено', 'alert' => 'alert-success']);
    }

    public function partners(){
        $partners = LanguageLine::where('group', 'partners')->get();

        $partners = [
            'title_1' => $partners[0]->text['title'],
            'title_2' => $partners[3]->text['title'],
            'action_1_ru' => $partners[2]->text['ru'],
            'action_1_kz' => $partners[2]->text['kz'],
            'action_1_en' => $partners[2]->text['en'],
            'action_2_ru' => $partners[5]->text['ru'],
            'action_2_kz' => $partners[5]->text['kz'],
            'action_2_en' => $partners[5]->text['en'],
            'link_1' => $partners[1]->text['link'],
            'link_2' => $partners[4]->text['link'],
            'image' => $partners[6]->text['image']
        ];

        return view('admin.main.partners', ['partners' => $partners]);
    }

    public function savePartners(Request $request){
        $request->validate([
            'title_1' => 'required',
            'title_2' => 'required',
            'action_1_ru' => 'required',
            'action_1_kz' => 'required',
            'action_1_en' => 'required',
            'action_2_ru' => 'required',
            'action_2_kz' => 'required',
            'action_2_en' => 'required',
            'link_1' => 'required',
            'link_2' => 'required'
        ]);

        LanguageLine::updateOrCreate(
            ['group' => 'partners', 'key' => 'title_1'],
            [
                'text' => [
                    'title' => $request->title_1,
                ]
            ]
        );

        LanguageLine::updateOrCreate(
            ['group' => 'partners', 'key' => 'title_2'],
            [
                'text' => [
                    'title' => $request->title_2,
                ]
            ]
        );

        LanguageLine::updateOrCreate(
            ['group' => 'partners', 'key' => 'action_1'],
            [
                'text' => [
                    'ru' => $request->action_1_ru,
                    'kz' => $request->action_1_kz,
                    'en' => $request->action_1_en
                ]
            ]
        );

        LanguageLine::updateOrCreate(
            ['group' => 'partners', 'key' => 'action_2'],
            [
                'text' => [
                    'ru' => $request->action_2_ru,
                    'kz' => $request->action_2_kz,
                    'en' => $request->action_2_en
                ]
            ]
        );

        LanguageLine::updateOrCreate(
            ['group' => 'partners', 'key' => 'link_1'],
            ['text' => [
                'link' => $request->link_1
            ]]
        );

        LanguageLine::updateOrCreate(
            ['group' => 'partners', 'key' => 'link_2'],
            ['text' => [
                'link' => $request->link_2
            ]]
        );

        if ($request->has('image')){
            $request->validate([
                'image' => 'image|mimes:jpeg,jpg,png|required|max:10000',
            ]);

            $image = LanguageLine::where('group', 'partners')->where('key', 'image')->first();

            if ($image) {
                Storage::disk('public')->delete($image->text);
            }

            LanguageLine::updateOrCreate(
                ['group' => 'partners', 'key' => 'image'],
                ['text' => [
                    'image' => $request->file('image')->store('partners', 'public')
                ]]
            );
        }

        return redirect('/admin/')->with(['message' => 'Успешно добавлено', 'alert' => 'alert-success']);
    }
}
