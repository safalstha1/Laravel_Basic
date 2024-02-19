<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  \Illuminate\Database\Eloquent\Relations\BelongsTo;
class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class); //eloquent relationship
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
