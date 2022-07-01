<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('pages/index', compact('posts'));
    }

    public function showCreateForm()
    {
        return view('pages/create');
    }

    public function create(Request $request)
    {
        $post = new Post();
        $post->name = $request->name;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('index');
    }
}
