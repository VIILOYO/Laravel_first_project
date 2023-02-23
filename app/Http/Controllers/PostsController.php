<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Post;
use Illuminate\View\View;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('posts.index', ['posts' => Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->only(['title', 'content']);
        $post = Post::create($data);

        return redirect()->route('posts.show', [$post->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        return view('posts.show', ['post' => Post::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        return view('posts.edit', ['post' => Post::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $data = $request->only('title', 'content');
        Post::findOrFail($id)->update($data);

        return redirect()->route('posts.show', [Post::findOrFail($id)]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Post::findOrFail($id)->delete();
        
        return redirect()->route('posts.index');
    }
}
