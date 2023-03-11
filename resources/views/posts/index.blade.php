@extends('posts.layouts.main')

@section('content')

@foreach ($posts as $post)
<div class="card">
    <div class="card-header">
        {{ $post->id }} Категория: {{ $post->category->title }}
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ \Illuminate\Support\Str::limit($post->content, 20, $end='...') }}</p>
        <h6 class="card-subtitle mb-2 text-muted">Лайки: {{ $post->likes }}</h6>
        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Читать полностью</a>
    </div>
</div>
@endforeach
<div>
    {{ $posts->links() }}
</div>
@endsection