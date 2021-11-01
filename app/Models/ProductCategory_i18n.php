<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory_i18n extends Model
{
    use HasFactory;

    protected $fillable = ['locale', 'title'];

    protected $table = 'product_categories_i18n';

    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }
}
