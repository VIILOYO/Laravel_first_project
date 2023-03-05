@extends('posts.layouts.main')

@section('content')

@foreach ($posts as $post)
<div class="card">
    <div class="card-header">
        Лайки: {{ $post->likes }}
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ \Illuminate\Support\Str::limit($post->content, 20, $end='...') }}</p>
        <a href="{{ route('posts.show', [$post->id]) }}" class="btn btn-primary">Читать полностью</a>
    </div>
</div>
@endforeach
@endsection