<title>Создание теста</title>

<form action="/tests" method="post">
    @csrf
    <label for="title">Заголовок</label>
    <input type="text" name="title"><br>

    <label for="description">Описание</label>
    <input type="text" name="description"><br>

    <input type="submit" value="Отправить"><br>
</form>