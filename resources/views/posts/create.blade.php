<title>Создание поста</title>

<form method="post" action="{{ route('posts.store') }}">
    @csrf
    <label for="title">Заголовок</label><br>
    <input type="text" name="title" placeholder="Заголовок"><br>

    <label for="content">Контент</label><br>
    <input type="textarea" name="content" placeholder="Контент"><br>

    <input type="submit" value="Отправить">
</form>