<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('backend.blog.index', compact('posts'));
    }

    public function create()
    {
        return view('backend.blog.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
        ]);

       Post::create([
            'title' => $validatedData['title'],
       ]);

        return redirect()->route('backend.blog.index')
                         ->with('success', 'Post creado satisfactoriamente.');
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function edit(Post $blog)
    {
        return view('backend.blog.edit', ['blog' => $blog]);
    }

    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
        ]);

        $post->title = $validatedData['title'];
        $post->save();

        return redirect()->route('backend.blog.index')
                         ->with('success', 'Post actualizado satisfactoriamente.');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('backend.blog.index')
                         ->with('success', 'Post eliminado satisfactoriamente.');
    }

    
}
