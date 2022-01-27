<?php

namespace App\Http\Controllers;

use App\Models\News_i18n;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $result = News_i18n::search($request->search)->get();
        dd($result);
        return News_i18n::search($request->search)->get();
    }
}
