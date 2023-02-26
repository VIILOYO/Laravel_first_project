<title>Пост {{ $post->id }}</title>

<a href="{{ route('trash.index') }}">Обратно в корзину</a>
<h1>Пост {{ $post->id }}</h1>
<h3>{{ $post->title }}</h3>
<p>{{ $post->content }}</p>
<small>Создано: {{ $post->created_at }}</small><br>
<small>Удалено: {{ $post->deleted_at }}</small><br>
<hr>

<form action="{{ route('trash.edit', [ $post->id ]) }}">
    @csrf
    <button>Обновить пост</button>
</form>

<form method="post" action="{{ route('trash.restore', [ $post->id]) }}">
    @csrf
    @method('put')
    <button>Восстановить пост</button>
</form>

<form method="post" action="{{ route('trash.destroy', [ $post->id]) }}">
    @csrf
    @method('delete')
    <button>Удалить полностью</button>
</form>