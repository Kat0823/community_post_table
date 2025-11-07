<?php

namespace App\Http\Controllers;

use App\Models\CommunityPost;
use Illuminate\Http\Request;

class CommunityPostController extends Controller
{
    // READ (All)
    public function index()
    {
        $communityPosts = CommunityPost::all();
        return view('community_post.index', compact('communityPosts'));
    }

    // READ (Single)
    public function show($id)
    {
        $communityPost = CommunityPost::findOrFail($id);
        return view('community_post.show', compact('communityPost'));
    }

    // CREATE (Show form)
    public function create()
    {
        return view('community_post.create');
    }

    // CREATE (Save new post)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        CommunityPost::create($request->all());
        return redirect()->route('communityposts.index')->with('success', 'Post created successfully.');
    }

    // UPDATE (Show edit form)
    public function edit($id)
    {
        $communityPost = CommunityPost::findOrFail($id);
        return view('community_post.edit', compact('communityPost'));
    }

    // UPDATE (Save changes)
    public function update(Request $request, $id)
    {
        $communityPost = CommunityPost::findOrFail($id);
        $communityPost->update($request->all());

        return redirect()->route('communityposts.index')->with('success', 'Post updated successfully.');
    }

    // DELETE
    public function destroy($id)
    {
        $communityPost = CommunityPost::findOrFail($id);
        $communityPost->delete();

        return redirect()->route('communityposts.index')->with('success', 'Post deleted successfully.');
    }
}
