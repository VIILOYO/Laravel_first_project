<title>Создание категории</title>
<form action="{{ route('categories.store') }}" method="post">
    @csrf
    <label for="slug">Slug</label><br>
    <input type="text" name="slug" placeholder="Slug"><br>

    <label for="title">Заголовок</label><br>
    <input type="text" name="title" placeholder="Заголовок"><br>

    <label for="description">Описание</label><br>
    <textarea name="description"cols="20" rows="5" placeholder="Описание"></textarea><br>

    <input type="submit" value="Отправить"><br>
</form>