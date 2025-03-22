<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['rating', 'user_id', 'content', 'review_date'];
    public $timestamps = false; // Если не добавлял timestamps в базу

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
