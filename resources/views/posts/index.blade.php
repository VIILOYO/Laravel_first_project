<title>Блог</title>
<h1>Блок постов</h1>
<a href="{{ route('posts.create') }}">Создать пост</a><br>
<a href="{{ route('trash.index') }}">Корзина</a>

@foreach ($posts as $post)
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->content }}</p>
    <small>{{ $post->created_at }}</small><br>
    <a href="{{ route('posts.show', [$post->id]) }}">Перейти на пост</a><hr>
@endforeach