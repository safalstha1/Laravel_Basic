<?php

namespace App\Models;

use App\Jobs\SendPostNotificationToAdmin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  \Illuminate\Database\Eloquent\Relations\BelongsTo;
class Post extends Model
{

    protected static function booted()
    {
        static::created(function ($post) {
            // Dispatch the job when a new post is created
            dispatch(new SendPostNotificationToAdmin($post));
        });
    }
    use HasFactory;

    protected $guarded = [];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
        $query
            ->where('title', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%'));
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class); //eloquent relationship
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
