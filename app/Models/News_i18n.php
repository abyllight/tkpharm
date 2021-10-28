<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News_i18n extends Model
{
    use HasFactory;

    protected $table = 'news_i18n';

    public function news(){
        return $this->belongsTo(News::class, 'news_id', 'id');
    }
}
