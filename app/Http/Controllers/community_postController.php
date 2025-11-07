<?php

namespace App\Http\Controllers;

use App\CommunityPost;
use Illuminate\Http\Request;

class CommunityPostController extends Controller
{

    public function index()
    {
      $CommunityPost = CommunityPost::all();
      return view('CommunityPost.index', compact('CommunityPost'))
      }
      public function show($id)
      {
        $CommunityPost = CommunityPost::find($id)
        return view('CommunityPost.show', compact('CommunityPost'));
      }
}