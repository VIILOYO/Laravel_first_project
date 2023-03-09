<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Post $post): View
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('posts.edit', compact('post', 'categories', 'tags'));
    }
}