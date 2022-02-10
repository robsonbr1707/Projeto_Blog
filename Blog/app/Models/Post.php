<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['name_slug', 'category', 'description', 'image', 'slug'];

    protected static function booted()
    {
        static::creating(function ($post) {
            $post->slug = Str::slug($post->name_slug);
        });

        static::updating(function ($post) {
            $post->slug = Str::slug($post->name_slug);
        });
    }

    public function records() :HasMany
    {
        return $this->hasMany(Record::class, 'post_category', 'category');
    }

    

}
