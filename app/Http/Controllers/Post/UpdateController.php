<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class UpdateController extends Controller
{
    public function __invoke(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => ['required', 'max:255', 'min:4'],
            'content' => ['required', 'min:4'],
            'image' => ['required'],
            'category_id' => ['required'],
            'tags' => '',
        ]);

        $tags = $data['tags'];
        unset($data['tags']);

        $post->update($data);
        $post->tags()->sync($tags);
            
        return redirect()->route('posts.index');
    }
}