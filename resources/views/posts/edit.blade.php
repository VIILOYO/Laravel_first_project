@extends('posts.layouts.main')

@section('content')

<form action="{{ route('posts.update', [$post->id]) }}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input name="title" type="text" class="form-control" placeholder="Заголовок" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Содержание</label>
            <textarea name="content" class="form-control" id="content" rows="3" placeholder="Содержимое">{{ $post->content }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Изображение</label>
            <input name="image" type="text" class="form-control" placeholder="Изображение" value="{{ $post->image }}">
        </div>
        <button type="submit" class="btn btn-primary">Изменить</button>
</form>

@endsection