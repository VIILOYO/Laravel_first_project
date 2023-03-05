@extends('posts.layouts.main')

@section('content')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Лайки: {{ $post->likes }}</h6>
            <p class="card-text">{{ $post->content }}</p>
            <a href="{{ route('post.like', [$post->id]) }}" class="card-link">Поставить лайк</a>
        </div>
    </div>
@endsection