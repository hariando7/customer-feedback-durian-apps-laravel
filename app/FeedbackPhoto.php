<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedbackPhoto extends Model
{
    protected $table = 'feedback_photos';

    protected $fillable = [
        'feedback_id',
        'photo_path',
    ];

    public function feedback()
    {
        return $this->belongsTo(Feedback::class);
    }
}
