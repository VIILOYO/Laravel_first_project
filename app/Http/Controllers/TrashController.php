<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Post;

class TrashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts = Post::onlyTrashed()->get();
        return view('posts.trash.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show(string $id): View
    {
        $post = Post::withTrashed()->findOrFail($id);
        return view('posts.trash.show', ['post' => $post]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function restore($id): RedirectResponse
    {
        Post::withTrashed()->findOrFail($id)->restore();
        return redirect()->route('trash.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $post = Post::withTrashed()->findOrFail($id);
        return view('posts.trash.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $data = $request->only('title', 'content');
        Post::withTrashed()->findOrFail($id)->update($data);

        return redirect()->route('trash.show', [Post::withTrashed()->findOrFail($id)]);
    }

}
