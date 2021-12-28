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

    public function history(){
        $history = LanguageLine::where('group', 'history')->get();

        $history = [
            'year_0_ru' => $history[21]->text['ru'],
            'title_0_ru' => $history[22]->text['ru'],
            'desc_0_ru' => $history[23]->text['ru'],
            'year_0_kz' => $history[21]->text['kz'],
            'title_0_kz' => $history[22]->text['kz'],
            'desc_0_kz' => $history[23]->text['kz'],
            'year_0_en' => $history[21]->text['en'],
            'title_0_en' => $history[22]->text['en'],
            'desc_0_en' => $history[23]->text['en'],
            'year_1_ru' => $history[0]->text['ru'],
            'title_1_ru' => $history[1]->text['ru'],
            'desc_1_ru' => $history[2]->text['ru'],
            'year_1_kz' => $history[0]->text['kz'],
            'title_1_kz' => $history[1]->text['kz'],
            'desc_1_kz' => $history[2]->text['kz'],
            'year_1_en' => $history[0]->text['en'],
            'title_1_en' => $history[1]->text['en'],
            'desc_1_en' => $history[2]->text['en'],
            'year_2_ru' => $history[3]->text['ru'],
            'title_2_ru' => $history[4]->text['ru'],
            'desc_2_ru' => $history[5]->text['ru'],
            'year_2_kz' => $history[3]->text['ru'],
            'title_2_kz' => $history[4]->text['ru'],
            'desc_2_kz' => $history[5]->text['ru'],
            'year_2_en' => $history[3]->text['ru'],
            'title_2_en' => $history[4]->text['ru'],
            'desc_2_en' => $history[5]->text['ru'],
            'year_3_ru' => $history[6]->text['ru'],
            'title_3_ru' => $history[7]->text['ru'],
            'desc_3_ru' => $history[8]->text['ru'],
            'year_3_kz' => $history[6]->text['ru'],
            'title_3_kz' => $history[7]->text['ru'],
            'desc_3_kz' => $history[8]->text['ru'],
            'year_3_en' => $history[6]->text['ru'],
            'title_3_en' => $history[7]->text['ru'],
            'desc_3_en' => $history[8]->text['ru'],
            'year_4_ru' => $history[9]->text['ru'],
            'title_4_ru' => $history[10]->text['ru'],
            'desc_4_ru' => $history[11]->text['ru'],
            'year_4_kz' => $history[9]->text['ru'],
            'title_4_kz' => $history[10]->text['ru'],
            'desc_4_kz' => $history[11]->text['ru'],
            'year_4_en' => $history[9]->text['ru'],
            'title_4_en' => $history[10]->text['ru'],
            'desc_4_en' => $history[11]->text['ru'],
            'year_5_ru' => $history[12]->text['ru'],
            'title_5_ru' => $history[13]->text['ru'],
            'desc_5_ru' => $history[14]->text['ru'],
            'year_5_kz' => $history[12]->text['ru'],
            'title_5_kz' => $history[13]->text['ru'],
            'desc_5_kz' => $history[14]->text['ru'],
            'year_5_en' => $history[12]->text['ru'],
            'title_5_en' => $history[13]->text['ru'],
            'desc_5_en' => $history[14]->text['ru'],
            'year_6_ru' => $history[15]->text['ru'],
            'title_6_ru' => $history[16]->text['ru'],
            'desc_6_ru' => $history[17]->text['ru'],
            'year_6_kz' => $history[15]->text['ru'],
            'title_6_kz' => $history[16]->text['ru'],
            'desc_6_kz' => $history[17]->text['ru'],
            'year_6_en' => $history[15]->text['ru'],
            'title_6_en' => $history[16]->text['ru'],
            'desc_6_en' => $history[17]->text['ru'],
            'year_7_ru' => $history[18]->text['ru'],
            'title_7_ru' => $history[19]->text['ru'],
            'desc_7_ru' => $history[20]->text['ru'],
            'year_7_kz' => $history[18]->text['ru'],
            'title_7_kz' => $history[19]->text['ru'],
            'desc_7_kz' => $history[20]->text['ru'],
            'year_7_en' => $history[18]->text['ru'],
            'title_7_en' => $history[19]->text['ru'],
            'desc_7_en' => $history[20]->text['ru'],
        ];

        return view('admin.main.history', ['history' => $history]);
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

    public function saveHistory(Request $request)
    {
        $arr= [];

        for ($i = 0;$i < 8;$i++){
            $arr[] = [
                'year_'.$i.'_ru' => 'required',
                'title_'.$i.'_ru' => 'required',
                'desc_'.$i.'_ru' => 'required',
                'year_'.$i.'_kz' => 'required',
                'title_'.$i.'_kz' => 'required',
                'desc_'.$i.'_kz' => 'required',
                'year_'.$i.'_en' => 'required',
                'title_'.$i.'_en' => 'required',
                'desc_'.$i.'_en' => 'required'
            ];
        }

        $request->validate(array_merge(...$arr));

        for ($i = 0; $i < 8; $i++){
            LanguageLine::updateOrCreate(
                ['group' => 'history', 'key' => 'year_'.$i],
                [
                    'text' => [
                        'ru' => $request['year_'.$i.'_ru'],
                        'kz' => $request['year_'.$i.'_kz'],
                        'en' => $request['year_'.$i.'_en']
                    ]
                ]
            );

            LanguageLine::updateOrCreate(
                ['group' => 'history', 'key' => 'title_'.$i],
                [
                    'text' => [
                        'ru' => $request['title_'.$i.'_ru'],
                        'kz' => $request['title_'.$i.'_kz'],
                        'en' => $request['title_'.$i.'_en']
                    ]
                ]
            );

            LanguageLine::updateOrCreate(
                ['group' => 'history', 'key' => 'description_'.$i],
                [
                    'text' => [
                        'ru' => $request['desc_'.$i.'_ru'],
                        'kz' => $request['desc_'.$i.'_kz'],
                        'en' => $request['desc_'.$i.'_en']
                    ]
                ]
            );
        }

        return redirect('/admin/')->with(['message' => 'Успешно добавлено', 'alert' => 'alert-success']);
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
