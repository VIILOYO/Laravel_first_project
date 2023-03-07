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

        <div class="mb-3">
            <label for="category_id">Категория</label>
            
            <select name="category_id" id="category_id" class="form-select" aria-label="Default select example">
                <option selected>Категория</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Изменить</button>
</form>

@endsection