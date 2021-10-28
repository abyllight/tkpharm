<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class News extends Model
{
    use HasFactory;

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

    public function getDescription()
    {
        $locale = App::currentLocale();
        $translate = $this->i18n()->where('locale', $locale)->first();

        return $translate ? $translate->description : '';
    }
}
