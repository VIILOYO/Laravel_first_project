<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        $posts = Post::where('is_published', 1)->get();

        return view('posts.index', compact('posts'));
    }
}