<?php

namespace App\Http\Controllers;

use App\Models\CommunityPost;
use Illuminate\Http\Request;

class CommunityPostController extends Controller
{
    /**
     * Display the specified resource (the single post).
     */
    // Laravel automatically finds the CommunityPost based on the ID passed in the URL.
    public function show(CommunityPost $post)
    {
        // The found post is available in the $post variable.
        // It is often conventional to rename the variable to the model name
        // though the route parameter is often 'community_post'
        
        return view('posts.show', [
            'post' => $post
        ]);
    }

    // ... other CRUD functions (index, create, store, edit, update, destroy)
}