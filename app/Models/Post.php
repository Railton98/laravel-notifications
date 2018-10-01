<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'body',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Author Post
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
