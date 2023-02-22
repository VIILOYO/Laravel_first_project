<title>Обновление поста {{ $test->id }}</title>

<form action="{{ route('tests.update', ['test' => $test->id]) }}" method="post">
    @csrf
    @method('put')
    <label for="title">Заголовок</label>
    <input type="text" name="title" value="{{ $test->title }}" placeholder="Заголовок"><br>

    <label for="description">Описание</label>
    <input type="text" name="description" value="{{ $test->description }}" placeholder="Описание"><br>

    <input type="submit" value="Изменить"><br>
</form>