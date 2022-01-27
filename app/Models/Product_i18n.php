<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Product_i18n extends Model
{
    use Searchable;

    protected $table = 'products_i18n';

    protected $fillable = [
        'locale',
        'title',
        'subtitle',
        'description',
        'amount'
    ];

    public function searchableAs()
    {
        return 'products_i18n_index';
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
