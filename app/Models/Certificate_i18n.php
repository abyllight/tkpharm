<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Certificate_i18n extends Model
{
    use Searchable;

    protected $table = 'certificates_i18n';

    protected $fillable = [
        'locale',
        'title'
    ];

    public function certificate()
    {
        return $this->belongsTo(Certificate::class, 'certificate_id', 'id');
    }
}
