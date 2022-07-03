<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Reply;
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

    public function showEditFrom(int $id)
    {
        $post = Post::find($id);
        return view('pages/edit', compact('post'));
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
        Reply::where('post_id', $id)->delete();
        return redirect()->route('index');
    }

    public function view(int $id)
    {
        $post = Post::find($id);
        $replies = Post::find($id)->replies;
        return view('pages/view', compact('post', 'replies'));
    }

    public function replyCreate(int $id, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required | max:10',
            'body' => 'required',
        ]);

        $reply = new Reply();
        $reply->post_id = $id;
        $reply->name = $request->name;
        $reply->body = $request->body;
        $reply->save();

        return redirect()->route('view', ['id' => $id]);
    }
}
