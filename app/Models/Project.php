<?php

namespace App\Models;

use Illuminate\Container\Attributes\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $casts = [
        'tech_stack' => 'array',
    ];

    protected static function booted(): void
    {
        static::creating(function ($project) {
            $project->slug = Str::slug($project->title);
        });
    }

    // Optional: if using tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
