<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History_i18n extends Model
{
    use HasFactory;

    protected $table = 'histories_i18n';

    protected $fillable = [
        'locale',
        'title',
        'description'
    ];

    public function history()
    {
        return $this->belongsTo(History::class, 'history_id', 'id');
    }
}
