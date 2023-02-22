<title>Тесты</title>
<h1>Тесты</h1>
<a href="{{ route('posts.index') }}">На страницу постов</a><br>
<a href="{{ route('tests.create') }}">Создать тест</a>

@foreach ($tests as $test)
    <h3>{{ $test->title }}</h3>
    <p>{{ $test->description }}</p>
    <a href="{{ route('tests.show', ['test' => $test->id]) }}">Смотреть подробнее</a><br>
    <small>{{ $test->created_at }}</small><hr>
@endforeach