<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
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

    public function create() {
        $posts = [
            [
                'title' => 'Новый пост',
                'content' => 'Контент нового поста',
                'image' => 'Изображение',
                'likes' => 12,
                'is_published' => TRUE,
            ], 
            [
                'title' => 'Новый пост 2',
                'content' => 'Контент нового поста 2',
                'image' => 'Изображение 2',
                'likes' => 25,
                'is_published' => TRUE,
            ]
        ];
        
        foreach($posts as $post) {
            $postCreate = Post::create($post);
            echo 'Пост ' . $postCreate->id . ' создан успешно <hr>';
        }
    }

    public function update($id) {
        $post = Post::findOrFail($id);
        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => 15,
            'is_published' => 1,
        ]);

        return redirect('/posts');
    }

    public function delete($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/posts');
    }

    public function firstOrCreate() {
        $post = [
            'title' => 'Первый пост',
            'content' => 'Контент первого поста',
            'image' => 'Изображение',
            'likes' => 5000,
            'is_published' => TRUE,
        ];

        Post::firstOrCreate($post);
        return redirect('/posts');
    }

    public function updateOrCreate() {
        $post = [
            'title' => 'Первый пост',
            'content' => 'Контент первого поста',
            'image' => 'Изображение',
            'likes' => 5000,
            'is_published' => TRUE,
        ];

        Post::updateOrCreate($post, ['title' => 'Обновлено']);
        return redirect('/posts');
    }
}
