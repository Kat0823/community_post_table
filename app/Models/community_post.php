<?php

namespace App\Http\Controllers;

use App\Models\CommunityPost; // 
use Illuminate\Http\Request;

class CommunityPostController extends Controller
{
    public function index()
    {
        
        $communityPosts = CommunityPost::all();

       
        return view('CommunityPost.index', compact('communityPosts'));
    }

    public function show($id)
    {
     
        $communityPost = CommunityPost::findOrFail($id);

    
        return view('CommunityPost.show', compact('communityPost'));
    }
}
