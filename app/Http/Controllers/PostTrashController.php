<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostTrashController extends Controller
{
    public function index()
    {
        $posts = Post::onlyTrashed()->get();
        return view('trash', compact('posts'));
    } 

    public function restore($id)
    {
        Post::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->route('trash.index');
    }

    public function destroy($id)
    {
        Post::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('trash.index');
    }
}
