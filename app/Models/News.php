<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class News extends Model
{
    public function i18n()
    {
        return $this->hasMany(News_i18n::class, 'news_id', 'id');
    }

    public function getTitle()
    {
        $locale = App::currentLocale();
        $translate = $this->i18n()->where('locale', $locale)->first();

        return $translate ? $translate->title : '';
    }

    public function getTitleRu()
    {
        $translate = $this->i18n()->where('locale', 'ru')->first();
        return $translate ? $translate->title : '';
    }

    public function getTitleKz()
    {
        $translate = $this->i18n()->where('locale', 'kz')->first();
        return $translate ? $translate->title : '';
    }

    public function getTitleEn()
    {
        $translate = $this->i18n()->where('locale', 'en')->first();
        return $translate ? $translate->title : '';
    }

    public function getDescription()
    {
        $locale = App::currentLocale();
        $translate = $this->i18n()->where('locale', $locale)->first();

        return $translate ? $translate->description : '';
    }

    public function getDescriptionRu()
    {
        $translate = $this->i18n()->where('locale', 'ru')->first();
        return $translate ? $translate->description : '';
    }

    public function getDescriptionKz()
    {
        $translate = $this->i18n()->where('locale', 'kz')->first();
        return $translate ? $translate->description : '';
    }

    public function getDescriptionEn()
    {
        $translate = $this->i18n()->where('locale', 'en')->first();
        return $translate ? $translate->description : '';
    }
}
