<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::all();
        foreach ($posts as $post) {
            echo($post->title . '<br>' . $post->content . '<hr>');
        };
    }

    public function post($id) {
        $post = Post::findOrFail($id);
        return($post->title . '<br>' . $post->content);
    }
}
