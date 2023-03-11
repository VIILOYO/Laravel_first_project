<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\FilterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Http\Filters\PostFilter;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request): View
    {
        $data = $request->validated();

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->paginate(10);

        return view('posts.index', compact('posts'));
    }
}