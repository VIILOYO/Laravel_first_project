<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostsController extends Controller
{
    public function index() {
        return view('posts.index', ['posts' => Post::all()]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $data = $request->only(['title', 'content']);
        $post = Post::create($data);

        return redirect("/posts/$post->id");
    }

    public function show($id) {
        return view('posts.show', ['post' => Post::findOrFail($id)]);
    }
}
