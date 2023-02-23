<title>Обновление удаленного поста {{ $post->id }}</title>

<form action="{{ route('trash.update', [$post->id]) }}" method="post">
    @csrf
    @method('put')
    <label for="title">Заголовок</label><br>
    <input type="text" name="title" placeholder="Заголовок" value="{{ $post->title }}"><br>

    <label for="description">Контент</label><br>
    <textarea name="content"cols="20" rows="5" placeholder="Контент">{{ $post->content }}</textarea><br>

    <input type="submit" value="Изменить"><br>
</form>