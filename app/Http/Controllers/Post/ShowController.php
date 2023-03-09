<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Post;

class ShowController extends Controller
{
    public function __invoke(Post $post): View
    {
        return view('posts.show', compact('post'));
    }
}