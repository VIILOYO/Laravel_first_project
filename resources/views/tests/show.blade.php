<title>Тест {{ $test->id }}</title>
<h1>Тест {{ $test->id }}</h1>
<a href="/tests">На главную</a>

<h3>{{ $test->title }}</h3>
<p>{{ $test->description }}</p>
<small>{{ $test->created_at }}</small><hr>

<form action="{{ route('tests.edit', [ $test->id ]) }}">
    @csrf
    <button>Обновить тест</button>
</form>

<form method="post" action="{{ route('tests.destroy', [ $test->id]) }}">
    @csrf
    @method('delete')
    <button>Удалить тест</button>
</form>