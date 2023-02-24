<title>Обновление категории {{ $category->id }}</title>

<form action="{{ route('categories.update', [$category->id]) }}" method="post">
    @csrf
    @method('put')
    <div>
        <label for="slug">Slug</label><br>
        <input type="text" name="slug" placeholder="Slug" value="{{ old('slug') ?? $category->slug }}"><br>
        @error('slug')
        <div>
            {{ $message }}
        </div>
        @enderror
    </div>

    <div>
        <label for="title">Заголовок</label><br>
        <input type="text" name="title" placeholder="Заголовок" value="{{ old('title') ?? $category->title }}"><br>
        @error('title')
        <div>
            {{ $message }}
        </div>
        @enderror
    </div>
    
    <label for="description">Описание</label><br>
    <textarea name="description"cols="20" rows="5" placeholder="Описание">{{ old('description') ?? $category->description }}</textarea><br>

    <input type="submit" value="Изменить"><br>
</form>