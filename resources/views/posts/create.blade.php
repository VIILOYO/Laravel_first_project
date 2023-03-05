@extends('posts.layouts.main')

@section('content')


<div>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input name="title" type="text" class="form-control" placeholder="Заголовок">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Содержание</label>
            <textarea name="content" class="form-control" id="content" rows="3" placeholder="Содержимое"></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Изображение</label>
            <input name="image" type="text" class="form-control" placeholder="Изображение">
        </div>
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
</div>

@endsection