<title>Создание категории</title>
<form action="{{ route('categories.store') }}" method="post">
    @csrf
    <div>
        <label for="slug">Slug</label><br>
        <input type="text" name="slug" placeholder="Slug" value="{{ old('slug') }}"><br>
        @error('slug')
        <div>
            {{ $message }}
        </div>
        @enderror
    </div>

    <label for="title">Заголовок</label><br>
    <input type="text" name="title" placeholder="Заголовок" value="{{ old('title') }}"><br>

    <label for="description">Описание</label><br>
    <textarea name="description"cols="20" rows="5" placeholder="Описание">{{ old('description') }}</textarea><br>

    <input type="submit" value="Отправить"><br>
</form>