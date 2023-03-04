@extends('posts.layouts.main')

@section('content')
    <a href="{{ route('post.index') }}">На главную</a>
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->content }}</p> 
@endsection