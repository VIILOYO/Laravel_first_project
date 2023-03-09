<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'content' => ['required'],
            'image' => ['required'],
            'category_id' => ['required'],
            'tags' => ['required'],
        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);

        $post->tags()->attach($tags);

        return redirect()->route('posts.index');
    }
}