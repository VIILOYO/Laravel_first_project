<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        $posts = Post::where('is_published', 1)->orderByDesc('id')->paginate(10);

        return view('posts.index', compact('posts'));
    }
}