<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_i18n extends Model
{
    use HasFactory;

    protected $table = 'products_i18n';

    protected $fillable = [
        'locale',
        'title',
        'subtitle',
        'description',
        'amount'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
