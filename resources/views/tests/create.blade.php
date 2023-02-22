<title>Создание теста</title>

<form action="{{ route('tests.store') }}" method="post">
    @csrf
    <label for="title">Заголовок</label>
    <input type="text" name="title" placeholder="Заголовок"><br>

    <label for="description">Описание</label>
    <input type="text" name="description" placeholder="Описание"><br>

    <input type="submit" value="Отправить"><br>
</form>