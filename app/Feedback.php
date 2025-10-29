<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';

    protected $fillable = [
        'panelist_name',
        'email',
        'no_wa',
        'qr_code',
        'alkoholik',
        'mengkal',
        'tidak_masak',
        'jumlah_juring',
        'kemanisan',
        'total_score',
        'note',
        'photo',
    ];

    public function photos()
    {
        return $this->hasMany(FeedbackPhoto::class);
    }
}
