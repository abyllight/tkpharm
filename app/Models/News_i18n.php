<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class News_i18n extends Model
{
    use Searchable;

    protected $table = 'news_i18n';

    protected $fillable = [
        'locale',
        'title',
        'description'
    ];

    public function searchableAs()
    {
        return 'news_i18n_index';
    }

    public function news(){
        return $this->belongsTo(News::class, 'news_id', 'id');
    }
}
