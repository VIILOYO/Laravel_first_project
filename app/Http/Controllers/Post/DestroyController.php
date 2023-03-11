<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Post;

class DestroyController extends Controller
{
    public function __invoke(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}