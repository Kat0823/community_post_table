<?php

namespace App\Http\Controllers;

use App\Models\CommunityPost;
use Illuminate\Http\Request;

class CommunityPostController extends Controller
{
    public function index()
    {
        $communityPosts = CommunityPost::latest()->paginate(10);
        return view('communitypost.index', compact('communityPosts'));
    }

    public function create()
    {
        return view('communitypost.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $data['user_id'] = auth()->id() ?? null;

        // handle image (optional)
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('community_images', 'public');
            $data['image'] = $path;
        }

        CommunityPost::create($data);

        return redirect()->route('communitypost.index')->with('success', 'Post created.');
    }

    public function show($id)
    {
        $communityPost = CommunityPost::findOrFail($id);
        return view('communitypost.show', compact('communityPost'));
    }

    public function edit($id)
    {
        $communityPost = CommunityPost::findOrFail($id);
        return view('communitypost.edit', compact('communityPost'));
    }

    public function update(Request $request, $id)
    {
        $post = CommunityPost::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('community_images', 'public');
            $data['image'] = $path;
        }

        $post->update($data);

        return redirect()->route('communitypost.index')->with('success', 'Post updated.');
    }

    public function destroy($id)
    {
        $post = CommunityPost::findOrFail($id);
        $post->delete();
        return redirect()->route('communitypost.index')->with('success', 'Post deleted.');
    }
}
