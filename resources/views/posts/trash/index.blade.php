<title>Корзина</title>
<h1>Корзина постов</h1>
<a href="{{ route('posts.index') }}">На страницу постов</a>

@foreach ($posts as $post)
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->content }}</p>
    <small>{{ $post->created_at }}</small><br>
    <a href="{{ route('trash.show', [$post->id]) }}">Перейти на пост</a><hr>
@endforeach