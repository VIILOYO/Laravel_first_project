<form method="post" action="/posts">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title"><br>

    <label for="content">Content</label>
    <input type="textarea" name="content"><br>

    <input type="submit" value="Отправить">
</form>