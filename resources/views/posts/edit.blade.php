@extends('posts.layouts.main')

@section('content')

<form action="{{ route('posts.update', [$post->id]) }}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input name="title" type="text" class="form-control" placeholder="Заголовок" value="{{ old('title') ?? $post->title }}">

            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Содержание</label>
            <textarea name="content" class="form-control" id="content" rows="3" placeholder="Содержимое">{{ old('content') ?? $post->content }}</textarea>
            
            @error('content')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Изображение</label>
            <input name="image" type="text" class="form-control" placeholder="Изображение" value="{{ old('image') ?? $post->image }}">
        
            @error('image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="category_id">Категория</label>
            
            <select name="category_id" id="category_id" class="form-select">
                @foreach ($categories as $category)
                    <option 
                        {{ $category->id === $post->category_id ? 'selected' : '' }}
                         value="{{ $category->id }}">{{ $category->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tags">Тэги</label>

            <select class="form-select" multiple id="tags" name="tags[]">
                @foreach ($tags as $tag)
                    <option 
                        @foreach ($post->tags as $postTag)
                            {{ $tag->id === $postTag->id ? 'selected' : '' }}
                        @endforeach
                        value="{{ $tag->id }}">{{ $tag->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Изменить</button>
</form>

@endsection