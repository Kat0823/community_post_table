<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityPost extends Model
{
    use HasFactory;

    protected $table = 'community_posts';

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'image',
        'views',
    ];

    // relations
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class); // optional
    }
}
