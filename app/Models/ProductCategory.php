<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class ProductCategory extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany(Product::class, 'product_category_id', 'id');
    }

    public function i18n()
    {
        return $this->hasMany(ProductCategory_i18n::class, 'product_category_id', 'id');
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
}
