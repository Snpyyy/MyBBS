<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);

        return view('pages/index', compact('posts'));
    }

    public function showCreateForm()
    {
        return view('pages/create');
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required | max:10',
            'body' => 'required',
        ]);

        $post = new Post();
        $post->name = $request->name;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('index');
    }

    public function showEditFrom(Request $request)
    {
        $postUser = Post::find($request->id);
        return view('pages/edit', compact('postUser'));
    }

    public function edit(int $id, Request $request)
    {
        $validated = $request->validate([
            'body' => 'required',
        ]);

        Post::where('id', $id)->update(['body' => $request->body]);
        return redirect()->route('index');
    }

    public function delete(int $id)
    {
        Post::where('id', $id)->delete();
        return redirect()->route('index');
    }
}
