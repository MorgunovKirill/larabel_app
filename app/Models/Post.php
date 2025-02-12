<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title', 'content',
        'published', 'published_at',
        'status', 'status_at',
    ];

    protected $casts = [
        'published' => 'boolean',
    ];

    protected $dates = ['published_at'];
}
