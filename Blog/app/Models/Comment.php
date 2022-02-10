<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['comment', 'record_category', 'user_id'];

    protected $casts = [
        'created_at' => 'datetime:D-m-y', 
    ];

    public function record() :BelongsTo
    {
        return $this->belongsTo(Record::class);
    }

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
