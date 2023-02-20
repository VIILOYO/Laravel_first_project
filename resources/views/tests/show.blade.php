<title>Тест {{ $test->id }}</title>
<h1>Тест {{ $test->id }}</h1>
<a href="/tests">На главную</a>

<h3>{{ $test->title }}</h3>
<p>{{ $test->description }}</p>
<small>{{ $test->created_at }}</small><hr>
<a href="/tests/{{ $test->id }}/delete">Удалить тест</a>
<a href="/tests/{{ $test->id }}/update">Обновить тест</a>