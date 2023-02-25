<title>Категория {{ $category->slug }}</title>
<h1>Категория {{ $category->slug }}</h1>
<a href="{{ route('categories.index') }}">На главную</a>

<h3>{{ $category->title }}</h3>
<h4>{{ $category->slug }}</h4>
<p>{{ $category->description }}</p>
<small>{{ $category->created_at }}</small><hr>

<form action="{{ route('categories.edit', [ $category->id ]) }}">
    @csrf
    <button>Обновить категорию</button>
</form>

<form method="post" action="{{ route('categories.destroy', [ $category->id]) }}">
    @csrf
    @method('delete')
    <button>Удалить категорию</button>
</form>