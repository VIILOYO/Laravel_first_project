@extends('posts.layouts.main')

@section('content')


<div>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input name="title" type="text" class="form-control" placeholder="Заголовок" value="{{ old('title') }}">

            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Содержание</label>
            <textarea name="content" class="form-control" id="content" rows="3" placeholder="Содержимое">{{ old('content') }}</textarea>
            @error('content')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Изображение</label>
            <input name="image" type="text" class="form-control" placeholder="Изображение" value="{{ old('image') }}">
            @error('image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="category_id">Категория</label>
            
            <select name="category_id" id="category_id" class="form-select">
                @foreach ($categories as $category)
                    <option 
                        {{ old('category_id') == $category->id ? 'selected' : '' }}

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
                        @if (old('tags'))
                            @foreach (old('tags') as $oldTag)
                                {{ $oldTag == $tag->id ? 'selected' : '' }}
                            @endforeach
                        @endif
                        value="{{ $tag->id }}">{{ $tag->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
</div>

@endsection