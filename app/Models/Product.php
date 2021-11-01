<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }

    public function i18n()
    {
        return $this->hasMany(Product_i18n::class, 'product_id', 'id');
    }

    public function getTitle()
    {
        $locale = App::currentLocale();
        $translate = $this->i18n()->where('locale', $locale)->first();

        return $translate ? $translate->title : '';
    }

    public function getSubtitle()
    {
        $locale = App::currentLocale();
        $translate = $this->i18n()->where('locale', $locale)->first();

        return $translate ? $translate->subtitle : '';
    }

    public function getDescription()
    {
        $locale = App::currentLocale();
        $translate = $this->i18n()->where('locale', $locale)->first();

        return $translate ? $translate->description : '';
    }

    public function getAmount()
    {
        $locale = App::currentLocale();
        $translate = $this->i18n()->where('locale', $locale)->first();

        return $translate ? $translate->amount : '';
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

    public function getSubtitleRu()
    {
        $translate = $this->i18n()->where('locale', 'ru')->first();
        return $translate ? $translate->subtitle : '';
    }

    public function getSubtitleKz()
    {
        $translate = $this->i18n()->where('locale', 'kz')->first();
        return $translate ? $translate->subtitle : '';
    }

    public function getSubtitleEn()
    {
        $translate = $this->i18n()->where('locale', 'en')->first();
        return $translate ? $translate->subtitle : '';
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

    public function getAmountRu()
    {
        $translate = $this->i18n()->where('locale', 'ru')->first();
        return $translate ? $translate->amount : '';
    }

    public function getAmountKz()
    {
        $translate = $this->i18n()->where('locale', 'kz')->first();
        return $translate ? $translate->amount : '';
    }

    public function getAmountEn()
    {
        $translate = $this->i18n()->where('locale', 'en')->first();
        return $translate ? $translate->amount : '';
    }
}
