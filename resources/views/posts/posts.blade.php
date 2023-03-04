@extends('posts.layouts.main')

@section('content')
    @foreach ($posts as $post)
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->content }}</p>
        <a href="{{ route('post.show', [$post->id]) }}">Читать</a>
        <hr>    
    @endforeach
@endsection