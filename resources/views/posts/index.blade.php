@extends('posts.layouts.main')

@section('content')

<div class="col-4 mb-3 ms-auto">
    <form action="{{ route('posts.index') }}" class="d-flex" role="search" method="get">
        @csrf
        <input name="title" class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Найти</button>
    </form>
</div>
@foreach ($posts as $post)
<div class="card">
    <div class="card-header">
        Категория: {{ $post->category->title }}
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
    {{ $posts->withQueryString()->links() }}
</div>
@endsection