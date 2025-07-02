<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    protected $casts = [
        'tags' => 'array',
        'published_at' => 'datetime',
    ];

    protected static function booted(): void
    {
        static::creating(function ($post) {
            $post->slug = Str::slug($post->title);
        });
    }

    // Optional: if using author/user system
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}


