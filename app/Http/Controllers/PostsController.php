<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::where('is_published', 1)->get();
        foreach ($posts as $post) {
            echo($post->title . '<br>' . $post->content . '<hr>');
        };
    }

    public function post($id) {
        $post = Post::findOrFail($id);
        return($post->title . '<br>' . $post->content);
    }

    public function likest() {
        $posts = Post::where('is_published', 1)->orderByDesc('likes')->limit(3)->get();
        
        foreach ($posts as $post) {
            echo($post->title . '<br>' . $post->content . '<br>' . $post->likes . '<hr>');
        };
    
    }
}
