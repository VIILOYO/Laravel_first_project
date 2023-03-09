<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Post;

class DestroyController extends Controller
{
    public function __invoke(Post $post)
    {
        $posts = Post::where('is_published', 1)->get();

        return view('posts.index', compact('posts'));
    }
}