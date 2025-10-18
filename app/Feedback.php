<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';

    protected $fillable = [
        'panelist_name',
        'qr_code',
        'color','aroma','texture_creamy','texture_smooth',
        'sweet','bitter','alcohol','total_score','note'
    ];

    // Relasi: satu feedback punya banyak foto
    public function photos()
    {
        return $this->hasMany(FeedbackPhoto::class);
    }
}
