@extends('posts.layouts.main')

@section('content')
    <div class="card" style="width: 64rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Категория: {{ $post->category->title }}</h6>
            <p class="card-text">{{ $post->content }}</p>
            <h6 class="card-subtitle mb-2 text-muted">Лайки: {{ $post->likes }}</h6>

            <form action="{{ route('posts.edit', $post->id) }}" method="get" style="float: left;">
                @csrf
                <button type="submit" class="btn btn-success">Редактировать</button>
            </form>

            <form action="{{ route('posts.destroy', $post->id) }}" method="post" style="margin-left: 20px;">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Удалить</button>
            </form>
        </div>
    </div>
@endsection