<title>Laravel</title>
<h1>Блок постов</h1>
<a href="/posts/create">Создать пост</a>

@foreach ($posts as $post)
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->content }}</p>
    <small>{{ $post->created_at }}</small><br>
    <a href="/posts/{{ $post->id }}">Перейти на пост</a><hr>
@endforeach