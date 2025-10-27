<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityPost extends Model
{
    use HasFactory;
    
    // Explicitly set the table name because it deviates from Laravel's naming convention
    protected $table = 'community__posts';

    // Specify which fields can be mass-assigned
    protected $fillable = [
        'user_id',
        'Title', // Using your capitalized column names
        'Content',
    ];

    /**
     * Define the relationship: A post belongs to one User.
     */
    public function user()
    {
        // Assuming your user model is named 'User'
        return $this->belongsTo(CommunityPost::class);
    }
}