<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Record extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image', 'slug', 'post_category'];

    public function post() :BelongsTo
    {
        return $this->belongsTo(Post::class, 'category', 'post_category');
    }

    public function comments() :HasMany
    {
        return $this->hasMany(Comment::class, 'record_category');
    }
}
