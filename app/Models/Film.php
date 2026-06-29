<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'poster_image',
        'preview_image',
        'background_image',
        'background_color',
        'video_link',
        'preview_video_link',
        'description',
        'director',
        'starring',
        'run_time',
        'released',
        'rating',
        'scores_count',
        'imdb_id',
        'status',
        'is_promo',
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }

    public function favorites(): HasMany
    {
        return $this->hasMany(Favorite::class);
    }

    protected function casts(): array
    {
        return [
            'starring' => 'array',
            'is_promo' => 'boolean',
        ];
    }
}
