<title>Пост {{ $post->id }}</title>

<a href="{{ route('posts.index') }}">На главную</a>
<h1>Пост {{ $post->id }}</h1>
<h3>{{ $post->title }}</h3>
<p>{{ $post->content }}</p>
<small>{{ $post->created_at }}</small><br>
<hr>
