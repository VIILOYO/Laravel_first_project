<title>Обновление категории {{ $category->id }}</title>

<form action="{{ route('categories.update', ['category' => $category->id]) }}" method="post">
    @csrf
    @method('put')
    <label for="slug">Slug</label><br>
    <input type="text" name="slug" placeholder="Slug" value="{{ $category->slug }}"><br>

    <label for="title">Заголовок</label><br>
    <input type="text" name="title" placeholder="Заголовок" value="{{ $category->title }}"><br>

    <label for="description">Описание</label><br>
    <textarea name="description"cols="20" rows="5" placeholder="Описание">{{ $category->description }}</textarea><br>

    <input type="submit" value="Изменить"><br>
</form>